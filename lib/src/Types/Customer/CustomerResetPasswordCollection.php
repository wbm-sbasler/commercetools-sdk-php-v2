<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\Collection;

interface CustomerResetPasswordCollection extends Collection
{
    /**
     * @param $index
     * @return CustomerResetPassword
     */
    public function at($index);

    /**
     * @return CustomerResetPassword
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerResetPassword
     */
    public function map($data, $index);
}
