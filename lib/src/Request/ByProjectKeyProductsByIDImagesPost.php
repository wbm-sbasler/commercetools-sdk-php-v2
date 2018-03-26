<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Product\Product;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UploadedFileInterface;


class ByProjectKeyProductsByIDImagesPost extends ApiRequest
{
    const RESULT_TYPE = Product::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, UploadedFileInterface $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{ID}'], [$projectKey, $ID], '/{projectKey}/products/{ID}/images');
        if (!is_null($body)) { $headers = $this->ensureHeader($headers, 'Content-Type', $body->getClientMediaType()); }
        parent::__construct('post', $uri, $headers, !is_null($body) ? $body->getStream() : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Product
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Product
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $filename
     * @return ByProjectKeyProductsByIDImagesPost
     */
    public function withFilename($filename): ByProjectKeyProductsByIDImagesPost
    {
        return $this->withQueryParam('filename', $filename);
    }
    /**
     * @param $variant
     * @return ByProjectKeyProductsByIDImagesPost
     */
    public function withVariant($variant): ByProjectKeyProductsByIDImagesPost
    {
        return $this->withQueryParam('variant', $variant);
    }
    /**
     * @param $sku
     * @return ByProjectKeyProductsByIDImagesPost
     */
    public function withSku($sku): ByProjectKeyProductsByIDImagesPost
    {
        return $this->withQueryParam('sku', $sku);
    }
    /**
     * @param $staged
     * @return ByProjectKeyProductsByIDImagesPost
     */
    public function withStaged($staged): ByProjectKeyProductsByIDImagesPost
    {
        return $this->withQueryParam('staged', $staged);
    }

}
