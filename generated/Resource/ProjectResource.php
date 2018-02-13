<?php

namespace HbsResearch\Tilkee\API\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Joli\Jane\OpenApi\Runtime\Client\Resource;
class ProjectResource extends Resource
{
    /**
     * Used to get a list of all your projects
     *
     * @param array  $parameters {
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
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\HbsResearch\Tilkee\API\Model\ProjectListResponse|null
     */
    public function listProject($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('search', NULL);
        $queryParam->setDefault('limit', NULL);
        $queryParam->setDefault('offset', NULL);
        $queryParam->setDefault('status', NULL);
        $queryParam->setDefault('user_id', NULL);
        $queryParam->setDefault('is_template', NULL);
        $queryParam->setDefault('name', NULL);
        $queryParam->setDefault('won', NULL);
        $queryParam->setDefault('can_be_downloaded', NULL);
        $queryParam->setDefault('is_or_was_signed', NULL);
        $queryParam->setDefault('signed', NULL);
        $queryParam->setDefault('starred', NULL);
        $queryParam->setDefault('nb_connections', NULL);
        $queryParam->setDefault('leader_id', NULL);
        $queryParam->setDefault('external_id', NULL);
        $url = '/projects';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'api-staging.tilkee.com'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'HbsResearch\\Tilkee\\API\\Model\\ProjectListResponse', 'json');
            }
            if ('400' == $response->getStatusCode()) {
                return null;
            }
            if ('401' == $response->getStatusCode()) {
                return null;
            }
        }
        return $response;
    }
    /**
     * Creating a project in this way you need to add everything; name, items, properties, etc. This section is used for creating projects with documents directly added in. To use this section you need to have a project already created or a template, and your documents have to be on the S3.
     *
     * @param \HbsResearch\Tilkee\API\Model\Project $project The project
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\HbsResearch\Tilkee\API\Model\Project|null
     */
    public function addProject(\HbsResearch\Tilkee\API\Model\Project $project, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/projects';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'api-staging.tilkee.com'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($project, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'HbsResearch\\Tilkee\\API\\Model\\Project', 'json');
            }
            if ('400' == $response->getStatusCode()) {
                return null;
            }
            if ('401' == $response->getStatusCode()) {
                return null;
            }
        }
        return $response;
    }
    /**
     * Permanently deletes a specific project
     *
     * @param int $projectId ID of project
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteProject($projectId, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/projects/{projectId}';
        $url = str_replace('{projectId}', urlencode($projectId), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'api-staging.tilkee.com'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return null;
            }
            if ('400' == $response->getStatusCode()) {
                return null;
            }
            if ('401' == $response->getStatusCode()) {
                return null;
            }
        }
        return $response;
    }
    /**
     * Used to get all details of a specific project
     *
     * @param int $projectId ID of project
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\HbsResearch\Tilkee\API\Model\Project|null
     */
    public function getProject($projectId, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/projects/{projectId}';
        $url = str_replace('{projectId}', urlencode($projectId), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'api-staging.tilkee.com'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'HbsResearch\\Tilkee\\API\\Model\\Project', 'json');
            }
            if ('400' == $response->getStatusCode()) {
                return null;
            }
            if ('401' == $response->getStatusCode()) {
                return null;
            }
        }
        return $response;
    }
    /**
     * This method can change a Tilkee project, in the following cases: - Say that a project is won - Archive a project - Change its name - Modify options like downloadable
     *
     * @param int $projectId ID of project
     * @param \HbsResearch\Tilkee\API\Model\Project $project The project
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\HbsResearch\Tilkee\API\Model\Project|null
     */
    public function putProject($projectId, \HbsResearch\Tilkee\API\Model\Project $project, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/projects/{projectId}';
        $url = str_replace('{projectId}', urlencode($projectId), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'api-staging.tilkee.com'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($project, 'json');
        $request = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'HbsResearch\\Tilkee\\API\\Model\\Project', 'json');
            }
            if ('400' == $response->getStatusCode()) {
                return null;
            }
            if ('401' == $response->getStatusCode()) {
                return null;
            }
        }
        return $response;
    }
    /**
     * In this section you can create a project using an existing one (copying it). Every part of the new project will be the same except the tilks.
     *
     * @param int $projectId ID of project
     * @param \HbsResearch\Tilkee\API\Model\ProjectDuplicateQuery $project The project
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\HbsResearch\Tilkee\API\Model\Project|null
     */
    public function duplicateProject($projectId, \HbsResearch\Tilkee\API\Model\ProjectDuplicateQuery $project, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/projects/{projectId}/duplicate';
        $url = str_replace('{projectId}', urlencode($projectId), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'api-staging.tilkee.com'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($project, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'HbsResearch\\Tilkee\\API\\Model\\Project', 'json');
            }
            if ('400' == $response->getStatusCode()) {
                return null;
            }
            if ('401' == $response->getStatusCode()) {
                return null;
            }
        }
        return $response;
    }
    /**
     * Use that section to consult all items in a project
     *
     * @param int $projectId ID of project
     * @param array  $parameters {
     *     @var string $status 
     *     @var bool $is_template 
     *     @var int $owner_id 
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\HbsResearch\Tilkee\API\Model\ProjectItem[]|null
     */
    public function listProjectItem($projectId, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('status', NULL);
        $queryParam->setDefault('is_template', NULL);
        $queryParam->setDefault('owner_id', NULL);
        $url = '/projects/{projectId}/items';
        $url = str_replace('{projectId}', urlencode($projectId), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'api-staging.tilkee.com'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'HbsResearch\\Tilkee\\API\\Model\\ProjectItem[]', 'json');
            }
            if ('400' == $response->getStatusCode()) {
                return null;
            }
            if ('401' == $response->getStatusCode()) {
                return null;
            }
        }
        return $response;
    }
    /**
     * Use this section to add an existing item to a project
     *
     * @param int $projectId ID of project
     * @param \HbsResearch\Tilkee\API\Model\ProjectItemCollection $item 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\HbsResearch\Tilkee\API\Model\ProjectItem[]|null
     */
    public function addItemToProject($projectId, \HbsResearch\Tilkee\API\Model\ProjectItemCollection $item, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/projects/{projectId}/add_items';
        $url = str_replace('{projectId}', urlencode($projectId), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'api-staging.tilkee.com'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($item, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'HbsResearch\\Tilkee\\API\\Model\\ProjectItem[]', 'json');
            }
            if ('400' == $response->getStatusCode()) {
                return null;
            }
            if ('401' == $response->getStatusCode()) {
                return null;
            }
        }
        return $response;
    }
    /**
     * Use this command to remove items from a project by ids
     *
     * @param int $projectId ID of project
     * @param \HbsResearch\Tilkee\API\Model\ProjectRemoveItemsQuery $items 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\HbsResearch\Tilkee\API\Model\ProjectItem[]|null
     */
    public function removeProjectItems($projectId, \HbsResearch\Tilkee\API\Model\ProjectRemoveItemsQuery $items, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/projects/{projectId}/remove_items';
        $url = str_replace('{projectId}', urlencode($projectId), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'api-staging.tilkee.com'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($items, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'HbsResearch\\Tilkee\\API\\Model\\ProjectItem[]', 'json');
            }
            if ('400' == $response->getStatusCode()) {
                return null;
            }
            if ('401' == $response->getStatusCode()) {
                return null;
            }
        }
        return $response;
    }
    /**
     * Usse this method to archive a project, you can use the won parameter to archive won, lost or undefined
     *
     * @param int $projectId ID of project
     * @param \HbsResearch\Tilkee\API\Model\ProjectArchiveQuery $won 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\HbsResearch\Tilkee\API\Model\Project|null
     */
    public function archiveProject($projectId, \HbsResearch\Tilkee\API\Model\ProjectArchiveQuery $won, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/projects/{projectId}/archive';
        $url = str_replace('{projectId}', urlencode($projectId), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'api-staging.tilkee.com'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($won, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'HbsResearch\\Tilkee\\API\\Model\\Project', 'json');
            }
            if ('400' == $response->getStatusCode()) {
                return null;
            }
            if ('401' == $response->getStatusCode()) {
                return null;
            }
        }
        return $response;
    }
    /**
     * Use this command to restore an archived project. Id is needed
     *
     * @param int $projectId ID of project
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\HbsResearch\Tilkee\API\Model\Project|null
     */
    public function restoreProject($projectId, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/projects/{projectId}/restore';
        $url = str_replace('{projectId}', urlencode($projectId), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'api-staging.tilkee.com'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'HbsResearch\\Tilkee\\API\\Model\\Project', 'json');
            }
            if ('400' == $response->getStatusCode()) {
                return null;
            }
            if ('401' == $response->getStatusCode()) {
                return null;
            }
        }
        return $response;
    }
}