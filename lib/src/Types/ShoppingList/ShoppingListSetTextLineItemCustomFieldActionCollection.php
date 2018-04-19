<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionCollection;


interface ShoppingListSetTextLineItemCustomFieldActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @param $index
     * @return ShoppingListSetTextLineItemCustomFieldAction
     */
    public function at($index);

    /**
     * @return ShoppingListSetTextLineItemCustomFieldAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShoppingListSetTextLineItemCustomFieldAction
     */
    public function map($data, $index);
}
