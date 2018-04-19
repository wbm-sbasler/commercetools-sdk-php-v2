<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderRemovePaymentActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderRemovePaymentActionCollection
{

    /**
     * @param OrderRemovePaymentAction $value
     * @return OrderRemovePaymentActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderRemovePaymentAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderRemovePaymentAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderRemovePaymentAction) {
            $data = $this->mapData(OrderRemovePaymentAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
