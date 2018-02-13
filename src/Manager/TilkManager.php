<?php
namespace HbsResearch\Tilkee\Manager;

use HbsResearch\Tilkee\API\Resource\TilkResource;
use HbsResearch\Tilkee\API\Model\CreateTokenQuery;
use HbsResearch\Tilkee\API\Model\Project;
use HbsResearch\Tilkee\Model\TokenRecipient;

class TilkManager extends TilkResource
{
    public function addRecipient(Project $project, TokenRecipient $recipient)
    {
        return $this->addRecipients($project, [$recipient]);
    }

    public function addRecipients(Project $project, array $recipientList)
    {
        $token = new CreateTokenQuery();
        $token->setPersons($recipientList);

        return $this->createTilk($project->getId(), $token);
    }
}