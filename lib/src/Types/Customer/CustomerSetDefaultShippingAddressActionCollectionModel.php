<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerSetDefaultShippingAddressActionCollectionModel extends CustomerUpdateActionCollectionModel implements CustomerSetDefaultShippingAddressActionCollection
{

    /**
     * @param CustomerSetDefaultShippingAddressAction $value
     * @return CustomerSetDefaultShippingAddressActionCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerSetDefaultShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerSetDefaultShippingAddressAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerSetDefaultShippingAddressAction) {
            $data = $this->mapData(CustomerSetDefaultShippingAddressAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
