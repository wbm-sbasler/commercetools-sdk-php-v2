<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\ProductDiscount\ProductDiscount;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyProductDiscountsByIDDelete extends ApiRequest
{
    const RESULT_TYPE = ProductDiscount::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{ID}'], [$projectKey, $ID], '/{projectKey}/product-discounts/{ID}');
        parent::__construct('delete', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ProductDiscount
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ProductDiscount
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $version
     * @return ByProjectKeyProductDiscountsByIDDelete
     */
    public function withVersion($version): ByProjectKeyProductDiscountsByIDDelete
    {
        return $this->withQueryParam('version', $version);
    }
    /**
     * @param $expand
     * @return ByProjectKeyProductDiscountsByIDDelete
     */
    public function withExpand($expand): ByProjectKeyProductDiscountsByIDDelete
    {
        return $this->withQueryParam('expand', $expand);
    }

}
