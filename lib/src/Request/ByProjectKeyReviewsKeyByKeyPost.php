<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Review\Review;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\Review\ReviewUpdate;


class ByProjectKeyReviewsKeyByKeyPost extends ApiRequest
{
    const RESULT_TYPE = Review::class;

    /**
     * @param $projectKey
     * @param $key
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $key, ReviewUpdate $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{key}'], [$projectKey, $key], '/{projectKey}/reviews/key={key}');
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Review
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Review
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyReviewsKeyByKeyPost
     */
    public function withExpand($expand): ByProjectKeyReviewsKeyByKeyPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
