<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI;

class Owner 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * ownerCreate
     * 
     * @param \PropertyMeld\MeldAPI\Models\Shared\OwnerInput $request
     * @param \PropertyMeld\MeldAPI\Models\Operations\OwnerCreateSecurity $security
     * @return \PropertyMeld\MeldAPI\Models\Operations\OwnerCreateResponse
     */
	public function ownerCreate(
        \PropertyMeld\MeldAPI\Models\Shared\OwnerInput $request,
        \PropertyMeld\MeldAPI\Models\Operations\OwnerCreateSecurity $security,
    ): \PropertyMeld\MeldAPI\Models\Operations\OwnerCreateResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api/v0.0.1/owner/');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \PropertyMeld\MeldAPI\Models\Operations\OwnerCreateResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->owner = $serializer->deserialize((string)$httpResponse->getBody(), 'PropertyMeld\MeldAPI\Models\Shared\Owner', 'json');
            }
        }

        return $response;
    }
	
    /**
     * ownerDestroy
     * 
     * @param \PropertyMeld\MeldAPI\Models\Operations\OwnerDestroyRequest $request
     * @param \PropertyMeld\MeldAPI\Models\Operations\OwnerDestroySecurity $security
     * @return \PropertyMeld\MeldAPI\Models\Operations\OwnerDestroyResponse
     */
	public function ownerDestroy(
        \PropertyMeld\MeldAPI\Models\Operations\OwnerDestroyRequest $request,
        \PropertyMeld\MeldAPI\Models\Operations\OwnerDestroySecurity $security,
    ): \PropertyMeld\MeldAPI\Models\Operations\OwnerDestroyResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api/v0.0.1/owner/{id}/', \PropertyMeld\MeldAPI\Models\Operations\OwnerDestroyRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \PropertyMeld\MeldAPI\Models\Operations\OwnerDestroyResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }

        return $response;
    }
	
    /**
     * ownerList
     * 
     * @param \PropertyMeld\MeldAPI\Models\Operations\OwnerListRequest $request
     * @param \PropertyMeld\MeldAPI\Models\Operations\OwnerListSecurity $security
     * @return \PropertyMeld\MeldAPI\Models\Operations\OwnerListResponse
     */
	public function ownerList(
        \PropertyMeld\MeldAPI\Models\Operations\OwnerListRequest $request,
        \PropertyMeld\MeldAPI\Models\Operations\OwnerListSecurity $security,
    ): \PropertyMeld\MeldAPI\Models\Operations\OwnerListResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api/v0.0.1/owner/');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\PropertyMeld\MeldAPI\Models\Operations\OwnerListRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \PropertyMeld\MeldAPI\Models\Operations\OwnerListResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paginatedOwnerList = $serializer->deserialize((string)$httpResponse->getBody(), 'PropertyMeld\MeldAPI\Models\Shared\PaginatedOwnerList', 'json');
            }
        }

        return $response;
    }
	
    /**
     * ownerPartialUpdate
     * 
     * @param \PropertyMeld\MeldAPI\Models\Operations\OwnerPartialUpdateRequest $request
     * @param \PropertyMeld\MeldAPI\Models\Operations\OwnerPartialUpdateSecurity $security
     * @return \PropertyMeld\MeldAPI\Models\Operations\OwnerPartialUpdateResponse
     */
	public function ownerPartialUpdate(
        \PropertyMeld\MeldAPI\Models\Operations\OwnerPartialUpdateRequest $request,
        \PropertyMeld\MeldAPI\Models\Operations\OwnerPartialUpdateSecurity $security,
    ): \PropertyMeld\MeldAPI\Models\Operations\OwnerPartialUpdateResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api/v0.0.1/owner/{id}/', \PropertyMeld\MeldAPI\Models\Operations\OwnerPartialUpdateRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "patchedOwnerInput", "json");
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \PropertyMeld\MeldAPI\Models\Operations\OwnerPartialUpdateResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->owner = $serializer->deserialize((string)$httpResponse->getBody(), 'PropertyMeld\MeldAPI\Models\Shared\Owner', 'json');
            }
        }

        return $response;
    }
	
    /**
     * ownerRetrieve
     * 
     * @param \PropertyMeld\MeldAPI\Models\Operations\OwnerRetrieveRequest $request
     * @param \PropertyMeld\MeldAPI\Models\Operations\OwnerRetrieveSecurity $security
     * @return \PropertyMeld\MeldAPI\Models\Operations\OwnerRetrieveResponse
     */
	public function ownerRetrieve(
        \PropertyMeld\MeldAPI\Models\Operations\OwnerRetrieveRequest $request,
        \PropertyMeld\MeldAPI\Models\Operations\OwnerRetrieveSecurity $security,
    ): \PropertyMeld\MeldAPI\Models\Operations\OwnerRetrieveResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api/v0.0.1/owner/{id}/', \PropertyMeld\MeldAPI\Models\Operations\OwnerRetrieveRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \PropertyMeld\MeldAPI\Models\Operations\OwnerRetrieveResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->owner = $serializer->deserialize((string)$httpResponse->getBody(), 'PropertyMeld\MeldAPI\Models\Shared\Owner', 'json');
            }
        }

        return $response;
    }
	
    /**
     * ownerUpdate
     * 
     * @param \PropertyMeld\MeldAPI\Models\Operations\OwnerUpdateRequest $request
     * @param \PropertyMeld\MeldAPI\Models\Operations\OwnerUpdateSecurity $security
     * @return \PropertyMeld\MeldAPI\Models\Operations\OwnerUpdateResponse
     */
	public function ownerUpdate(
        \PropertyMeld\MeldAPI\Models\Operations\OwnerUpdateRequest $request,
        \PropertyMeld\MeldAPI\Models\Operations\OwnerUpdateSecurity $security,
    ): \PropertyMeld\MeldAPI\Models\Operations\OwnerUpdateResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api/v0.0.1/owner/{id}/', \PropertyMeld\MeldAPI\Models\Operations\OwnerUpdateRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ownerInput", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \PropertyMeld\MeldAPI\Models\Operations\OwnerUpdateResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->owner = $serializer->deserialize((string)$httpResponse->getBody(), 'PropertyMeld\MeldAPI\Models\Shared\Owner', 'json');
            }
        }

        return $response;
    }
}