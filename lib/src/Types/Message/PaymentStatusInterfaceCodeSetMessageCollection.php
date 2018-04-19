<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface PaymentStatusInterfaceCodeSetMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return PaymentStatusInterfaceCodeSetMessage
     */
    public function at($index);

    /**
     * @return PaymentStatusInterfaceCodeSetMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentStatusInterfaceCodeSetMessage
     */
    public function map($data, $index);
}
