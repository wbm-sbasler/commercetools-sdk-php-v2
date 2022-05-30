<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductDiscountReference>
 */
final class ProductDiscountReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|ProductDiscount|ProductDiscountBuilder
     */
    private $obj;

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:ProductDiscount">ProductDiscount</a>.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded ProductDiscount. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for ProductDiscounts.</p>
     *
     * @return null|ProductDiscount
     */
    public function getObj()
    {
        return $this->obj instanceof ProductDiscountBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?ProductDiscount $obj
     * @return $this
     */
    public function withObj(?ProductDiscount $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?ProductDiscountBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): ProductDiscountReference
    {
        return new ProductDiscountReferenceModel(
            $this->id,
            $this->obj instanceof ProductDiscountBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): ProductDiscountReferenceBuilder
    {
        return new self();
    }
}
