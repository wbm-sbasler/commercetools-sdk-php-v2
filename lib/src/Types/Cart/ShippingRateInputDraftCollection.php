<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface ShippingRateInputDraftCollection extends Collection
{
    /**
     * @param $index
     * @return ShippingRateInputDraft
     */
    public function at($index);

    /**
     * @return ShippingRateInputDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ShippingRateInputDraft
     */
    public function map($data, $index);
}
