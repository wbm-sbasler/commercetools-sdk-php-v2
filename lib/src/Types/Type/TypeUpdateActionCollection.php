<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\UpdateActionCollection;


interface TypeUpdateActionCollection extends UpdateActionCollection
{
    /**
     * @param $index
     * @return TypeUpdateAction
     */
    public function at($index);

    /**
     * @return TypeUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TypeUpdateAction
     */
    public function map($data, $index);
}
