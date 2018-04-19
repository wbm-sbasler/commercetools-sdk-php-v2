<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionCollection;


interface ProductSetKeyActionCollection extends ProductUpdateActionCollection
{
    /**
     * @param $index
     * @return ProductSetKeyAction
     */
    public function at($index);

    /**
     * @return ProductSetKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductSetKeyAction
     */
    public function map($data, $index);
}
