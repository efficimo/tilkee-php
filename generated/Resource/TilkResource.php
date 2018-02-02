<?php

namespace Tilkee\API\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Joli\Jane\OpenApi\Runtime\Client\Resource;
class TilkResource extends Resource
{
    /**
     * You can have several links (Tilks) for a project. This command is used to retrieve all of them. A project id is needed
     *
     * @param int $projectId ID of project
     * @param array  $parameters {
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
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Tilkee\API\Model\ResponseTokenList|null
     */
    public function listProjectTilks($projectId, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('search', NULL);
        $queryParam->setDefault('limit', NULL);
        $queryParam->setDefault('offset', NULL);
        $queryParam->setDefault('order', NULL);
        $queryParam->setDefault('archived_tokens', NULL);
        $queryParam->setDefault('signed_status', NULL);
        $queryParam->setDefault('consulted', NULL);
        $queryParam->setDefault('signed', NULL);
        $queryParam->setDefault('nb_connections', NULL);
        $queryParam->setDefault('interest', NULL);
        $queryParam->setDefault('external_id', NULL);
        $url = '/projects/{projectId}/tokens';
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Tilkee\\API\\Model\\ResponseTokenList', 'json');
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
     * This method creates a "Tilk", which is a unique link to send your project to your prospect. You can create up to 200 "Tilks" with one call to this method.
     *
     * @param int $projectId ID of project
     * @param \Tilkee\API\Model\InputToken $tilks 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Tilkee\API\Model\ResponseCreateToken|null
     */
    public function createTilk($projectId, \Tilkee\API\Model\InputToken $tilks, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/projects/{projectId}/tokens';
        $url = str_replace('{projectId}', urlencode($projectId), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'api-staging.tilkee.com'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($tilks, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Tilkee\\API\\Model\\ResponseCreateToken', 'json');
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
     * This command is used to retrieve all of your tilks, this way you can filter them (by interest for instance).
     *
     * @param array  $parameters {
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
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Tilkee\API\Model\ResponseTokenList|null
     */
    public function listTilks($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('limit', NULL);
        $queryParam->setDefault('offset', NULL);
        $queryParam->setDefault('order', NULL);
        $queryParam->setDefault('is_owner', NULL);
        $queryParam->setDefault('archived_tokens', NULL);
        $queryParam->setDefault('accessible_tokens', NULL);
        $queryParam->setDefault('consulted', NULL);
        $queryParam->setDefault('project_id', NULL);
        $queryParam->setDefault('nb_connections', NULL);
        $queryParam->setDefault('interest', NULL);
        $url = '/tokens';
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Tilkee\\API\\Model\\ResponseTokenList', 'json');
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
     * Used to get every details of a link (Tilk). You need a project id and a Tilk id.
     *
     * @param int $projectId ID of project
     * @param int $id ID of tilk
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Tilkee\API\Model\Token|null
     */
    public function getProjectTilk($projectId, $id, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/projects/{projectId}/tokens/{id}';
        $url = str_replace('{projectId}', urlencode($projectId), $url);
        $url = str_replace('{id}', urlencode($id), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Tilkee\\API\\Model\\Token', 'json');
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
     * Used to update Tilk parameters like name or status
     *
     * @param int $projectId ID of project
     * @param int $id ID of tilk
     * @param \Tilkee\API\Model\ProjectsProjectIdTokensIdPutBody $tilk 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Tilkee\API\Model\Token|null
     */
    public function updateProjectTilk($projectId, $id, \Tilkee\API\Model\ProjectsProjectIdTokensIdPutBody $tilk, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/projects/{projectId}/tokens/{id}';
        $url = str_replace('{projectId}', urlencode($projectId), $url);
        $url = str_replace('{id}', urlencode($id), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'api-staging.tilkee.com'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($tilk, 'json');
        $request = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Tilkee\\API\\Model\\Token', 'json');
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
     * In this section you can archive your tilks
     *
     * @param int $projectId ID of project
     * @param int $id ID of tilk
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Tilkee\API\Model\Token|null
     */
    public function archiveProjectTilk($projectId, $id, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/projects/{projectId}/tokens/{id}/archive/';
        $url = str_replace('{projectId}', urlencode($projectId), $url);
        $url = str_replace('{id}', urlencode($id), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Tilkee\\API\\Model\\Token', 'json');
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
     * Used to restore an archived Tilk, you need a Tilk id
     *
     * @param int $id ID of tilk
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Tilkee\API\Model\Token|null
     */
    public function restoreTilk($id, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/tokens/{id}/restore';
        $url = str_replace('{id}', urlencode($id), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'api-staging.tilkee.com'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Tilkee\\API\\Model\\Token', 'json');
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