<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface OrderStateTransitionMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return OrderStateTransitionMessage
     */
    public function at($index);

    /**
     * @return OrderStateTransitionMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderStateTransitionMessage
     */
    public function map($data, $index);
}
