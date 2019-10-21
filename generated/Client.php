<?php

namespace HbsResearch\Tilkee\API;

class Client extends \Jane\OpenApiRuntime\Client\Psr18Client
{
    /**
     * Used to get a list of all your projects.
     *
     * @param array $queryParameters {
     *
     *     @var string $search Name
     *     @var int $limit
     *     @var int $offset
     *     @var string $status
     *     @var int $user_id To see projects to specific user. Management need to be active in company.
     *     @var bool $is_template
     *     @var string $name
     *     @var bool $won
     *     @var bool $can_be_downloaded
     *     @var bool $is_or_was_signed
     *     @var bool $signed
     *     @var bool $starred
     *     @var int $nb_connections
     *     @var int $leader_id
     *     @var string $external_id
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\ListProjectBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\ListProjectUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ResponseProjectList|\Psr\Http\Message\ResponseInterface|null
     */
    public function listProject(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\ListProject($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Creating a project in this way you need to add everything; name, items, properties, etc. This section is used for creating projects with documents directly added in. To use this section you need to have a project already created or a template, and your documents have to be on the S3.
     *
     * @param \HbsResearch\Tilkee\API\Model\InputProject $requestBody
     * @param array                                      $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\AddProjectBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\AddProjectUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\Project|\Psr\Http\Message\ResponseInterface|null
     */
    public function addProject(\HbsResearch\Tilkee\API\Model\InputProject $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\AddProject($requestBody, $headerParameters), $fetch);
    }

    /**
     * After uploading one (or more) files, you can then create a project and one or several unique access links.
     *
     * @param \HbsResearch\Tilkee\API\Model\WrapperTokenFromFilesPostBody $requestBody
     * @param array                                                       $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\CreateProjectBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\CreateProjectUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\WrapperTokenFromFilesPostResponse200|\Psr\Http\Message\ResponseInterface|null
     */
    public function createProject(\HbsResearch\Tilkee\API\Model\WrapperTokenFromFilesPostBody $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\CreateProject($requestBody, $headerParameters), $fetch);
    }

    /**
     * Permanently deletes a specific project.
     *
     * @param int   $projectId        ID of project
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\DeleteProjectBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\DeleteProjectUnauthorizedException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteProject(int $projectId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\DeleteProject($projectId, $headerParameters), $fetch);
    }

    /**
     * Used to get all details of a specific project.
     *
     * @param int   $projectId       ID of project
     * @param array $queryParameters {
     *
     *     @var bool $iframe_url Tell if iframe links are wanted
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\GetProjectBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\GetProjectUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\Project|\Psr\Http\Message\ResponseInterface|null
     */
    public function getProject(int $projectId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\GetProject($projectId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * This method can change a Tilkee project, in the following cases: - Say that a project is won - Archive a project - Change its name - Modify options like downloadable.
     *
     * @param int                                        $projectId        ID of project
     * @param \HbsResearch\Tilkee\API\Model\InputProject $requestBody
     * @param array                                      $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\PutProjectBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\PutProjectUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\Project|\Psr\Http\Message\ResponseInterface|null
     */
    public function putProject(int $projectId, \HbsResearch\Tilkee\API\Model\InputProject $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\PutProject($projectId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * In this section you can create a project using an existing one (copying it). Every part of the new project will be the same except the tilks.
     *
     * @param int                                                              $projectId        ID of project
     * @param \HbsResearch\Tilkee\API\Model\ProjectsProjectIdDuplicatePostBody $requestBody
     * @param array                                                            $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\DuplicateProjectBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\DuplicateProjectUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ResponseProjectDuplicate|\Psr\Http\Message\ResponseInterface|null
     */
    public function duplicateProject(int $projectId, \HbsResearch\Tilkee\API\Model\ProjectsProjectIdDuplicatePostBody $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\DuplicateProject($projectId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use that section to consult all items in a project.
     *
     * @param int   $projectId       ID of project
     * @param array $queryParameters {
     *
     *     @var string $status
     *     @var bool $is_template
     *     @var int $owner_id
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\ListProjectItemBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\ListProjectItemUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ProjectItem[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function listProjectItem(int $projectId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\ListProjectItem($projectId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this section to add an existing item to a project.
     *
     * @param int                                                             $projectId        ID of project
     * @param \HbsResearch\Tilkee\API\Model\ProjectsProjectIdAddItemsPostBody $requestBody
     * @param array                                                           $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\AddItemToProjectBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\AddItemToProjectUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ProjectItem[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function addItemToProject(int $projectId, \HbsResearch\Tilkee\API\Model\ProjectsProjectIdAddItemsPostBody $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\AddItemToProject($projectId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this command to remove items from a project by ids.
     *
     * @param int                                                                $projectId        ID of project
     * @param \HbsResearch\Tilkee\API\Model\ProjectsProjectIdRemoveItemsPostBody $requestBody
     * @param array                                                              $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\RemoveProjectItemsBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\RemoveProjectItemsUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ProjectItem[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function removeProjectItems(int $projectId, \HbsResearch\Tilkee\API\Model\ProjectsProjectIdRemoveItemsPostBody $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\RemoveProjectItems($projectId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Usse this method to archive a project, you can use the won parameter to archive won, lost or undefined.
     *
     * @param int                                                            $projectId        ID of project
     * @param \HbsResearch\Tilkee\API\Model\ProjectsProjectIdArchivePostBody $requestBody
     * @param array                                                          $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\ArchiveProjectBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\ArchiveProjectUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ResponseProjectArchive|\Psr\Http\Message\ResponseInterface|null
     */
    public function archiveProject(int $projectId, \HbsResearch\Tilkee\API\Model\ProjectsProjectIdArchivePostBody $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\ArchiveProject($projectId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * Use this command to restore an archived project. Id is needed.
     *
     * @param int   $projectId        ID of project
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\RestoreProjectBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\RestoreProjectUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ResponseProjectArchive|\Psr\Http\Message\ResponseInterface|null
     */
    public function restoreProject(int $projectId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\RestoreProject($projectId, $headerParameters), $fetch);
    }

    /**
     * You can have several links (Tilks) for a project. This command is used to retrieve all of them. A project id is needed.
     *
     * @param int   $projectId       ID of project
     * @param array $queryParameters {
     *
     *     @var string $search Title, name, email, token_url
     *     @var int $limit
     *     @var int $offset
     *     @var string $order
     *     @var bool $archived_tokens
     *     @var string $signed_status
     *     @var bool $consulted
     *     @var bool $signed
     *     @var int $nb_connections
     *     @var int $interest
     *     @var string $external_id
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\ListProjectTilksBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\ListProjectTilksUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ResponseTokenList|\Psr\Http\Message\ResponseInterface|null
     */
    public function listProjectTilks(int $projectId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\ListProjectTilks($projectId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * This method creates a "Tilk", which is a unique link to send your project to your prospect. You can create up to 200 "Tilks" with one call to this method.
     *
     * @param int                                      $projectId        ID of project
     * @param \HbsResearch\Tilkee\API\Model\InputToken $requestBody
     * @param array                                    $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\CreateTilkBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\CreateTilkUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ResponseCreateToken|\Psr\Http\Message\ResponseInterface|null
     */
    public function createTilk(int $projectId, \HbsResearch\Tilkee\API\Model\InputToken $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\CreateTilk($projectId, $requestBody, $headerParameters), $fetch);
    }

    /**
     * This command is used to retrieve all of your tilks, this way you can filter them (by interest for instance).
     *
     * @param array $queryParameters {
     *
     *     @var int $limit
     *     @var int $offset
     *     @var string $order
     *     @var bool $is_owner
     *     @var bool $archived_tokens
     *     @var bool $accessible_tokens Not archived tokens in not archived projects
     *     @var bool $consulted
     *     @var int $project_id
     *     @var int $nb_connections
     *     @var int $interest
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\ListTilksBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\ListTilksUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ResponseTokenList|\Psr\Http\Message\ResponseInterface|null
     */
    public function listTilks(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\ListTilks($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Used to get every details of a link (Tilk). You need a project id and a Tilk id.
     *
     * @param int   $projectId        ID of project
     * @param int   $id               ID of tilk
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\GetProjectTilkBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\GetProjectTilkUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\Token|\Psr\Http\Message\ResponseInterface|null
     */
    public function getProjectTilk(int $projectId, int $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\GetProjectTilk($projectId, $id, $headerParameters), $fetch);
    }

    /**
     * Used to update Tilk parameters like name or status.
     *
     * @param int                                                            $projectId        ID of project
     * @param int                                                            $id               ID of tilk
     * @param \HbsResearch\Tilkee\API\Model\ProjectsProjectIdTokensIdPutBody $requestBody
     * @param array                                                          $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\UpdateProjectTilkBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\UpdateProjectTilkUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\Token|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateProjectTilk(int $projectId, int $id, \HbsResearch\Tilkee\API\Model\ProjectsProjectIdTokensIdPutBody $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\UpdateProjectTilk($projectId, $id, $requestBody, $headerParameters), $fetch);
    }

    /**
     * In this section you can archive your tilks.
     *
     * @param int   $projectId        ID of project
     * @param int   $id               ID of tilk
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\ArchiveProjectTilkBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\ArchiveProjectTilkUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\Token|\Psr\Http\Message\ResponseInterface|null
     */
    public function archiveProjectTilk(int $projectId, int $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\ArchiveProjectTilk($projectId, $id, $headerParameters), $fetch);
    }

    /**
     * Used to restore an archived Tilk, you need a Tilk id.
     *
     * @param int   $id               ID of tilk
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\RestoreTilkBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\RestoreTilkUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\Token|\Psr\Http\Message\ResponseInterface|null
     */
    public function restoreTilk(int $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\RestoreTilk($id, $headerParameters), $fetch);
    }

    /**
     * Use this to get the list of items you added to your Tilkee account.
     *
     * @param array $queryParameters {
     *
     *     @var string $search Title, owner name
     *     @var int $limit
     *     @var int $offset
     *     @var string $order -items.created_at
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\ListItemsBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\ListItemsUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ResponseItemList|\Psr\Http\Message\ResponseInterface|null
     */
    public function listItems(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\ListItems($queryParameters, $headerParameters), $fetch);
    }

    /**
     * This section allows you to create items. You have 3 possibilities: add a document from a URL, add text or add external content.'.
     *
     * @param \HbsResearch\Tilkee\API\Model\InputItem[] $requestBody
     * @param array                                     $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\CreateItemsBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\CreateItemsUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\ItemWithOwnership[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function createItems(array $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\CreateItems($requestBody, $headerParameters), $fetch);
    }

    /**
     * Permanently deletes a specific item.
     *
     * @param int   $itemId           ID of item
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\DeleteItemBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\DeleteItemUnauthorizedException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteItem(int $itemId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\DeleteItem($itemId, $headerParameters), $fetch);
    }

    /**
     * Replace item with new item.
     *
     * @param int   $itemId          ID of item
     * @param array $queryParameters {
     *
     *     @var bool $all_chosen true if you want to replace item in all existing projects, false if you want to update only templates
     *     @var int $new_item_id ID of new item
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\ReplaceItemBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\ReplaceItemUnauthorizedException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function replaceItem(int $itemId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\ReplaceItem($itemId, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Use this to get the s3 informations to be used to upload on S3.
     *
     * @param array $queryParameters {
     *
     *     @var string $filename
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $x-tilk-ref Identification de l'outil, peux contenir un numéro de version par ex. tool-2.1
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \HbsResearch\Tilkee\API\Exception\GetUploadFileInformationBadRequestException
     * @throws \HbsResearch\Tilkee\API\Exception\GetUploadFileInformationUnauthorizedException
     *
     * @return \HbsResearch\Tilkee\API\Model\UploadInformation|\Psr\Http\Message\ResponseInterface|null
     */
    public function getUploadFileInformation(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \HbsResearch\Tilkee\API\Endpoint\GetUploadFileInformation($queryParameters, $headerParameters), $fetch);
    }

    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api-staging.tilkee.com');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(\HbsResearch\Tilkee\API\Normalizer\NormalizerFactory::create(), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
