<?php

namespace Tilkee\API\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Joli\Jane\OpenApi\Runtime\Client\Resource;
class ItemsResource extends Resource
{
    /**
     * Use this to get the list of items you added to your Tilkee account
     *
     * @param array  $parameters {
     *     @var string $search Title, owner name
     *     @var int $limit 
     *     @var int $offset 
     *     @var string $order -items.created_at
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Tilkee\API\Model\ResponseItemList|null
     */
    public function listItems($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('search', NULL);
        $queryParam->setDefault('limit', NULL);
        $queryParam->setDefault('offset', NULL);
        $queryParam->setDefault('order', NULL);
        $url = '/items/';
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Tilkee\\API\\Model\\ResponseItemList', 'json');
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
     * This section allows you to create items. You have 3 possibilities: add a document from a URL, add text or add external content.'
     *
     * @param array $project The project
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Tilkee\API\Model\ItemWithOwnership[]|null
     */
    public function createItems(array $project, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/items/';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'api-staging.tilkee.com'), $queryParam->buildHeaders($parameters));
        $body = $project;
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Tilkee\\API\\Model\\ItemWithOwnership[]', 'json');
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
     * Permanently deletes a specific item
     *
     * @param int $itemId ID of item
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteItem($itemId, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/items/{itemId}';
        $url = str_replace('{itemId}', urlencode($itemId), $url);
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
     * Use this section to add an existing item to a project
     *
     * @param int $projectId ID of project
     * @param \Tilkee\API\Model\ProjectsProjectIdAddItemsPostBody $item 
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Tilkee\API\Model\ProjectItem[]|null
     */
    public function addItemToProject($projectId, \Tilkee\API\Model\ProjectsProjectIdAddItemsPostBody $item, $parameters = array(), $fetch = self::FETCH_OBJECT)
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Tilkee\\API\\Model\\ProjectItem[]', 'json');
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