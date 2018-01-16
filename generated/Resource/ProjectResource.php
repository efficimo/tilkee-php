<?php

namespace Tilkee\API\Resource;

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
     * @return \Psr\Http\Message\ResponseInterface|\Tilkee\API\Model\ResponseProjectList|null
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Tilkee\\API\\Model\\ResponseProjectList', 'json');
            }
            if ('400' == $response->getStatusCode()) {
                return null;
            }
        }
        return $response;
    }
    /**
     * Creating a project in this way you need to add everything; name, items, properties, etc. This section is used for creating projects with documents directly added in. To use this section you need to have a project already created or a template, and your documents have to be on the S3.
     *
     * @param \Tilkee\API\Model\InputProject $project The project
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Tilkee\API\Model\ProjectsPostResponse200|null
     */
    public function addProject(\Tilkee\API\Model\InputProject $project, $parameters = array(), $fetch = self::FETCH_OBJECT)
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Tilkee\\API\\Model\\ProjectsPostResponse200', 'json');
            }
            if ('400' == $response->getStatusCode()) {
                return null;
            }
        }
        return $response;
    }
}