<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollection;


interface StateAddRolesActionCollection extends StateUpdateActionCollection
{
    /**
     * @param $index
     * @return StateAddRolesAction
     */
    public function at($index);

    /**
     * @return StateAddRolesAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return StateAddRolesAction
     */
    public function map($data, $index);
}
