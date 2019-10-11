<?php

namespace HbsResearch\Tilkee\Tests;

use HbsResearch\Tilkee\API\Client;
use HbsResearch\Tilkee\API\Model\InputProject;
use HbsResearch\Tilkee\API\Model\Project;
use HbsResearch\Tilkee\API\Model\ProjectsProjectIdDuplicatePostBody;
use HbsResearch\Tilkee\Tilkee;
use HbsResearch\Tilkee\TilkeeClient;
use Http\Client\Exception\HttpException;
use Http\Message\Authentication\Bearer;
use PHPUnit\Framework\TestCase;

class TilkeeTest extends TestCase
{
    /**
     * @var Client
     */
    protected $client;

    public function __construct(...$args)
    {
        $bearer = new Bearer($_ENV['APP_BEARER']);
        $httpClient = new TilkeeClient($bearer, 'efficimo-tests');
        $this->client = (new Tilkee($httpClient))->getClient();

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

// 404 ??
//    public function testProjectDuplicate()
//    {
//        $inputProject = new InputProject();
//        $inputProject
//            ->setName('Test 1')
//            ->setDuration(120)
//            ->setCanBeDownladed(true)
//            ->setExternalId(123)
//            ->setArchivedAt('2020-10-10 00:00:00')
//        ;
//
//        $project = $this->client->addProject($inputProject);
//
//        $updateProject = new ProjectsProjectIdDuplicatePostBody();
//        $updateProject
//            ->setName('Test 2')
//            ->setCanBeDownladed(true)
//            ->setShouldDuplicateAssignments(true)
//            ->setArchivedAt('2020-10-10 00:00:00')
//        ;
//
//        $projectDuplicated = $this->client->duplicateProject($project->getId(), $updateProject);
//
//        $this->assertInstanceOf(Project::class, $projectDuplicated);
//        $this->assertEquals('Test 2', $projectDuplicated);
//
//        $this->client->deleteProject($project->getId());
//        $this->client->deleteProject($projectDuplicated->getId());
//    }



}
