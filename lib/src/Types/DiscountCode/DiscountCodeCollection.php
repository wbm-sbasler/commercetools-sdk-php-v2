<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\Common\ResourceCollection;


interface DiscountCodeCollection extends ResourceCollection
{
    /**
     * @param $index
     * @return DiscountCode
     */
    public function at($index);

    /**
     * @return DiscountCode
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCode
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return DiscountCode
     */
    public function byId($id);

}
