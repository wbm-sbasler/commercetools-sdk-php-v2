<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetSearchKeywordsActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductSetSearchKeywordsAction
     */
    public function at($index);

    /**
     * @return ProductSetSearchKeywordsAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetSearchKeywordsAction
     */
    public function map($data, $index);
}
