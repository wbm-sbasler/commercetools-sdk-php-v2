<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetCustomFieldActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetCustomFieldActionCollection
{

    /**
     * @param CartSetCustomFieldAction $value
     * @return CartSetCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetCustomFieldAction) {
            $data = $this->mapData(CartSetCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
