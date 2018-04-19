<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\UpdateCollection;


interface ExtensionUpdateCollection extends UpdateCollection
{
    /**
     * @param $index
     * @return ExtensionUpdate
     */
    public function at($index);

    /**
     * @return ExtensionUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ExtensionUpdate
     */
    public function map($data, $index);
}
