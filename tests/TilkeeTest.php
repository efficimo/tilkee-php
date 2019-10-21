<?php

namespace HbsResearch\Tilkee\Tests;

use HbsResearch\Tilkee\API\Model\InputItem;
use HbsResearch\Tilkee\API\Model\InputProject;
use HbsResearch\Tilkee\API\Model\Project;
use HbsResearch\Tilkee\API\Model\ProjectsProjectIdAddItemsPostBody;
use HbsResearch\Tilkee\API\Model\ProjectsProjectIdAddItemsPostBodyItemsItem;
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
        $httpClient = new TilkeeClient($bearer, 'efficimo-tests');
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
        $uploadedFile = $this->tilkee->uploadFile($uploadInformation, $handle, $file);

        return $uploadedFile;
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
}
