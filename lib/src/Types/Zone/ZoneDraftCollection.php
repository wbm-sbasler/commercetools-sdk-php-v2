<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Base\Collection;

interface ZoneDraftCollection extends Collection
{
    /**
     * @param $index
     * @return ZoneDraft
     */
    public function at($index);

    /**
     * @return ZoneDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ZoneDraft
     */
    public function map($data, $index);
}
