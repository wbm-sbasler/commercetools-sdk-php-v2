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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeySubscriptionsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeySubscriptionsPost
 *
 * @internal
 */
class ResourceByProjectKeySubscriptionsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeySubscriptionsGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/subscriptions?expand=expand',
            ],
            'ByProjectKeySubscriptionsGet_withWhere' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/subscriptions?where=where',
            ],
            'ByProjectKeySubscriptionsGet_withSort' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/subscriptions?sort=sort',
            ],
            'ByProjectKeySubscriptionsGet_withLimit' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/subscriptions?limit=limit',
            ],
            'ByProjectKeySubscriptionsGet_withOffset' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/subscriptions?offset=offset',
            ],
            'ByProjectKeySubscriptionsGet_withWithTotal' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/subscriptions?withTotal=withTotal',
            ],
            'ByProjectKeySubscriptionsGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/subscriptions',
            ],
            'ByProjectKeySubscriptionsPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/subscriptions?expand=expand',
            ],
            'ByProjectKeySubscriptionsPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/subscriptions',
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
            'ByProjectKeySubscriptionsGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->get()
                    ;
                },
            ],
            'ByProjectKeySubscriptionsPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->post(null)
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
