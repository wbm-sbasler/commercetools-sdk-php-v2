<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRoot;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTypesKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTypesKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTypesKeyByKeyPost
 *
 * @internal
 */
class ResourceByProjectKeyProductTypesKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductTypesKeyByKeyGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/product-types/key={key}?expand=expand',
            ],
            'ByProjectKeyProductTypesKeyByKeyGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->withKey('key')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/product-types/key={key}',
            ],
            'ByProjectKeyProductTypesKeyByKeyPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/product-types/key={key}?expand=expand',
            ],
            'ByProjectKeyProductTypesKeyByKeyPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->withKey('key')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/product-types/key={key}',
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete_withVersion' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/product-types/key={key}?version=version',
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/product-types/key={key}?expand=expand',
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->withKey('key')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/product-types/key={key}',
            ],
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRoot();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        }
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductTypesKeyByKeyGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->withKey('key')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyProductTypesKeyByKeyPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->withKey('key')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->withKey('key')
                        ->delete()
                    ;
                },
            ],
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testMapFromResponse(callable $builderFunction)
    {
        $builder = new ApiRoot();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], '{}');
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
