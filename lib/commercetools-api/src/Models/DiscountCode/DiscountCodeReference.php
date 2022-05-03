<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountCodeReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded DiscountCode. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for DiscountCodes.</p>
     *
     * @return null|DiscountCode
     */
    public function getObj();

    /**
     * <p>Platform-generated unique identifier of the referenced <a href="ctp:api:type:DiscountCode">DiscountCode</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?DiscountCode $obj
     */
    public function setObj(?DiscountCode $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
