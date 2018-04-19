<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Base\Collection;

interface PaymentMethodInfoCollection extends Collection
{
    /**
     * @param $index
     * @return PaymentMethodInfo
     */
    public function at($index);

    /**
     * @return PaymentMethodInfo
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentMethodInfo
     */
    public function map($data, $index);
}
