<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollection;


interface OrderUpdateSyncInfoActionCollection extends OrderUpdateActionCollection
{
    /**
     * @param $index
     * @return OrderUpdateSyncInfoAction
     */
    public function at($index);

    /**
     * @return OrderUpdateSyncInfoAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderUpdateSyncInfoAction
     */
    public function map($data, $index);
}
