<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Common\ResourceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class PaymentCollectionModel extends ResourceCollectionModel implements PaymentCollection
{

    /**
     * @param Payment $value
     * @return PaymentCollection
     */
    public function add($value) {
        if (!$value instanceof Payment) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Payment
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Payment) {
            $data = $this->mapData(Payment::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }

    protected function index($data)
    {
        foreach ($data as $key => $value) {
            if (isset($value['id'])) {
                $this->addToIndex('id', $value['id'], $key);
            }
        }
    }

    /**
     * @param string $id
     * @return Payment
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }

}
