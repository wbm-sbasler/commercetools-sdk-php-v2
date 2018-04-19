<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollection;


interface AttributeLocalizedEnumTypeCollection extends AttributeTypeCollection
{
    /**
     * @param $index
     * @return AttributeLocalizedEnumType
     */
    public function at($index);

    /**
     * @return AttributeLocalizedEnumType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AttributeLocalizedEnumType
     */
    public function map($data, $index);
}
