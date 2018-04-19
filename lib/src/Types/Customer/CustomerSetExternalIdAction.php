<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

interface CustomerSetExternalIdAction extends CustomerUpdateAction
{
    const FIELD_EXTERNAL_ID = 'externalId';

    /**
     * @return string
     */
    public function getExternalId();

    /**
     * @param string $externalId
     * @return $this
     */
    public function setExternalId(string $externalId);

}
