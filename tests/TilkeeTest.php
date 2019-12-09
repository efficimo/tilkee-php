<?php

namespace HbsResearch\Tilkee\Tests;

use HbsResearch\Tilkee\API\Model\InputItem;
use HbsResearch\Tilkee\API\Model\InputProject;
use HbsResearch\Tilkee\API\Model\ItemUpdate;
use HbsResearch\Tilkee\API\Model\ItemUpdateSharedAttributes;
use HbsResearch\Tilkee\API\Model\Notification;
use HbsResearch\Tilkee\API\Model\NotificationsPostBody;
use HbsResearch\Tilkee\API\Model\Project;
use HbsResearch\Tilkee\API\Model\ProjectsProjectIdAddItemsPostBody;
use HbsResearch\Tilkee\API\Model\ProjectsProjectIdAddItemsPostBodyItemsItem;
use HbsResearch\Tilkee\API\Model\User;
use HbsResearch\Tilkee\API\Model\WrapperTokenFromFilesPostBody;
use HbsResearch\Tilkee\Tilkee;
use HbsResearch\Tilkee\TilkeeClient;
use HbsResearch\Tilkee\UploadedFileResponse;
use Http\Client\Exception\HttpException;
use Http\Message\Authentication\Bearer;
use PHPUnit\Framework\TestCase;

class TilkeeTest extends TestCase
{
    protected $client;
    protected $tilkee;

    public function __construct(...$args)
    {
        $bearer = new Bearer($_ENV['APP_BEARER']);
        $httpClient = new TilkeeClient($bearer, 'efficimo-tests', [
            'host' => $_ENV['APP_HOST']
        ]);
        $this->tilkee = (new Tilkee($httpClient, new \Http\Adapter\Guzzle6\Client(new \GuzzleHttp\Client())));
        $this->client = $this->tilkee->getClient();

        parent::__construct(...$args);
    }

    public function testProjectAdd()
    {
        $inputProject = new InputProject();
        $inputProject
            ->setName('Test 1')
            ->setDuration(120)
            ->setCanBeDownladed(true)
            ->setExternalId(123)
            ->setArchivedAt('2020-10-10 00:00:00')
        ;

        $project = $this->client->addProject($inputProject);

        $this->assertInstanceOf(Project::class, $project);
        $this->client->deleteProject($project->getId());
    }

    public function testCreateProject()
    {
        $file1 = $this->uploadFile('test.png');
        $file2 = $this->uploadFile('test.pdf');

        $request = new WrapperTokenFromFilesPostBody();
        $request
            ->setProject((new InputProject())
                ->setName('Test create Project')
            )
            ->setDocuments([])
        ;

        $response = $this->client->createProject($request);
    }

    protected function uploadFile($file): UploadedFileResponse
    {
        $uploadInformation = $this->client->getUploadFileInformation([
            'filename' => $file,
        ]);

        $handle = fopen(__DIR__.'/files/'.$file, 'r+');

        $response = null;

        $promise = $this->tilkee->uploadFile($uploadInformation, $handle, $file, function(UploadedFileResponse $uploadedFileResponse) use (&$response) {
            $response = $uploadedFileResponse;
        });

        $promise->wait();

        return $response;
    }

    public function testUploadFile()
    {
        $uploadInformation = $this->client->getUploadFileInformation([
            'filename' => 'test.png',
        ]);

        $inputProject = new InputProject();
        $inputProject
            ->setName('Test 1')
            ->setDuration(3600)
            ->setCanBeDownladed(false)
            ->setExternalId(123)
            ->setArchivedAt('2020-10-10 00:00:00')
        ;

        $project = $this->client->addProject($inputProject);

        $uploadResponse = $this->uploadFile('test.pdf');

        $test =
            (new InputItem())
                ->setName($uploadResponse->getKey())
                ->setS3Url($uploadResponse->getLocation())
                ->setUrl($uploadResponse->getLocation())
                ->setType('file')
                ->setExternalId(123)
        ;

        $items = $this->client->createItems([$test]);

        $itemsToProject = [];

        foreach($items as $item) {
            $itemsToProject[] = (new ProjectsProjectIdAddItemsPostBodyItemsItem())
                ->setTitle(basename($uploadResponse->getKey()))
                ->setId($item->getId())
                ->setSignable(false)
                ->setDownloadable(true)
            ;
        }

        $this->client->addItemToProject($project->getId(), (new ProjectsProjectIdAddItemsPostBody())->setItems($itemsToProject));
    }

    public function testListWebhooks()
    {
//        var_dump($this->tilkee->getClient()->listNotifications());
    }

    public function testCreateWebhook()
    {
        $me = $this->tilkee->getClient()->me();
        $me->getCompany()->getId();

        $this->tilkee->getClient()->createNotification((new Notification())
            ->setCompanyId($me->getCompany()->getId())
            ->setRule('connexion_ended')
            ->setUrl('https://w1dcejm1yh.execute-api.eu-west-3.amazonaws.com/production/events')
        );
    }

    public function testDocumentIsolation()
    {
        /** @var User[] $users */
        $users = [
            'xavier' => $this->getUser([
                'email' => 'xavier@test.com',
                'firstName' => 'xavier',
                'lastName' => 'test',
            ]),
            'thomas' => $this->getUser([
                'email' => 'thomas@test.com',
                'firstName' => 'thomas',
                'lastName' => 'test',
            ]),
        ];

        foreach($users as $user) {
            $inputProject = new InputProject();
            $inputProject
                ->setName('Test '.$user->getFirstName())
                ->setDuration(3600)
                ->setCanBeDownladed(false)
                ->setExternalId(123)
                ->setArchivedAt('2020-10-10 00:00:00')
            ;


            $project = $this->client->addProject($inputProject, ['USER_ID' => $user->getId()]);
            $uploadResponse = $this->uploadFile('test.pdf');

            $test =
                (new InputItem())
                    ->setName($user->getFirstName().'-'.$uploadResponse->getKey())
                    ->setS3Url($uploadResponse->getLocation())
                    ->setUrl($uploadResponse->getLocation())
                    ->setType('file')
                    ->setExternalId(123)
            ;

            $items = $this->client->createItems([$test], ['USER_ID' => $user->getId()]);

            $itemsToProject = [];

            foreach($items as $item) {
                $this->tilkee->getClient()->updateItem($item->getId(), (new ItemUpdate())
                    ->setSharedAttributes(new ItemUpdateSharedAttributes())
                    , ['USER_ID' => $user->getId()]
                );

                $itemsToProject[] = (new ProjectsProjectIdAddItemsPostBodyItemsItem())
                    ->setTitle(basename($uploadResponse->getKey()))
                    ->setId($item->getId())
                    ->setSignable(false)
                    ->setDownloadable(true)
                ;
            }

            $this->client->addItemToProject($project->getId(), (new ProjectsProjectIdAddItemsPostBody())->setItems($itemsToProject), ['USER_ID' => $user->getId()]);
            $projectWithIframes = $this->tilkee->getClient()->getProject($project->getId(), ['iframe_url' => true], ['USER_ID' => $user->getId()]);

            echo 'Iframe '.$user->getFirstName(). ' '.$projectWithIframes->getIframes()->project.PHP_EOL;
        }
    }

    public function testSearchUser()
    {
        $users = $this->client->listUser(['search' => 'watson@efficimo.lan']);

        var_dump($users);
    }

    protected function getUser($data): User
    {
        $users = $this->client->listUser(['search' => $data['email']]);

        if($users->getTotal() === 0) {
            $userInput = new User();
            $userInput
                ->setFirstName($data['firstName'])
                ->setLastName($data['lastName'])
                ->setEmail($data['email'])
                ->setLevelId(3)
                ->setShouldReceiveConnexionEmail(false)
                ->setShouldReceiveEmails(false)
            ;

            return $this->client->addUser($userInput);
        }

        return $users->getContents()[0];
    }

    public function testUserProject()
    {
        $inputProject = new InputProject();
        $inputProject
            ->setName('Test 1')
            ->setDuration(3600)
            ->setCanBeDownladed(false)
            ->setExternalId(123)
            ->setArchivedAt('2020-10-10 00:00:00')
        ;

        $user = $this->getUser([
            'email' => 'xavier@test.com',
            'firstName' => 'xavier',
            'lastName' => 'test',
        ]);

        $project = $this->client->addProject($inputProject, ['USER_ID' => $user->getId()]);

        $uploadResponse = $this->uploadFile('test.pdf');

        $test =
            (new InputItem())
                ->setName($uploadResponse->getKey())
                ->setS3Url($uploadResponse->getLocation())
                ->setUrl($uploadResponse->getLocation())
                ->setType('file')
                ->setExternalId(123)
        ;

        $items = $this->client->createItems([$test], ['USER_ID' => $user->getId()]);

        $itemsToProject = [];

        foreach($items as $item) {
            printf("ItemID: %s User: id -> %s email -> %s",$item->getId(), $item->getOwner()->getId(), $item->getOwner()->getEmail());
            $this->tilkee->getClient()->updateItem($item->getId(), (new ItemUpdate())
                ->setSharedAttributes(new ItemUpdateSharedAttributes())
                , ['USER_ID' => $user->getId()]
            );

            $itemsToProject[] = (new ProjectsProjectIdAddItemsPostBodyItemsItem())
                ->setTitle(basename($uploadResponse->getKey()))
                ->setId($item->getId())
                ->setSignable(false)
                ->setDownloadable(true)
            ;
        }

        $this->client->addItemToProject($project->getId(), (new ProjectsProjectIdAddItemsPostBody())->setItems($itemsToProject), ['USER_ID' => $user->getId()]);

//        $this->client->deleteUser($user->getId());
    }

    public function testProjectUpdate()
    {
        $inputProject = new InputProject();
        $inputProject
            ->setName('Test 1')
            ->setDuration(120)
            ->setCanBeDownladed(true)
            ->setExternalId(123)
            ->setArchivedAt('2020-10-10 00:00:00')
        ;

        $project = $this->client->addProject($inputProject);
        $this->assertInstanceOf(Project::class, $project);

        $updateProject = new InputProject();
        $updatedProject = $this->client->putProject($project->getId(), $updateProject->setName('Test 2'));
        $this->assertEquals('Test 2', $updatedProject->getName());
        $this->assertEquals(120, $updatedProject->getDuration());

        $this->client->deleteProject($project->getId());
    }

    public function testProjectDelete()
    {
        $inputProject = new InputProject();
        $inputProject
            ->setName('Test 1')
            ->setDuration(120)
            ->setCanBeDownladed(true)
            ->setExternalId(123)
            ->setArchivedAt('2020-10-10 00:00:00')
        ;

        $project = $this->client->addProject($inputProject);
        $this->client->deleteProject($project->getId());
        $this->expectException(HttpException::class);
        $this->expectExceptionCode(410);
        $this->assertEmpty($this->client->getProject($project->getId()));
    }

    public function testConnexions()
    {
        $connexions = $this->client->getConnexions();
    }

    public function testCreateUser()
    {
        $userInput = new User();
        $userInput
            ->setFirstName('xavier')
            ->setLastName('thomas')
            ->setEmail('xavier@test.com')
            ->setLevelId(3)
        ;

        $user = $this->client->addUser($userInput);
        $users = $this->client->listUser(['search' => 'xavier@test.com']);

        $this->assertCount(1, $users->getContents());

        $this->client->deleteUser($user->getId());
    }
}
