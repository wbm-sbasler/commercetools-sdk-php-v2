<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\FieldContainerBuilder;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CategorySetAssetCustomTypeAction>
 */
final class CategorySetAssetCustomTypeActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $assetId;

    /**
     * @var ?string
     */
    private $assetKey;

    /**
     * @var null|TypeResourceIdentifier|TypeResourceIdentifierBuilder
     */
    private $type;

    /**
     * @var null|FieldContainer|FieldContainerBuilder
     */
    private $fields;

    /**
     * <p>New value to set. Either <code>assetId</code> or <code>assetKey</code> is required.</p>
     *
     * @return null|string
     */
    public function getAssetId()
    {
        return $this->assetId;
    }

    /**
     * <p>New value to set. Either <code>assetId</code> or <code>assetKey</code> is required.</p>
     *
     * @return null|string
     */
    public function getAssetKey()
    {
        return $this->assetKey;
    }

    /**
     * <p>Defines the <a href="ctp:api:type:Type">Type</a> that extends the Asset with <a href="/../api/projects/custom-fields">Custom Fields</a>.
     * If absent, any existing Type and Custom Fields are removed from the Asset.</p>
     *
     * @return null|TypeResourceIdentifier
     */
    public function getType()
    {
        return $this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type;
    }

    /**
     * <p>Sets the <a href="/../api/projects/custom-fields">Custom Fields</a> fields for the Asset.</p>
     *
     * @return null|FieldContainer
     */
    public function getFields()
    {
        return $this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields;
    }

    /**
     * @param ?string $assetId
     * @return $this
     */
    public function withAssetId(?string $assetId)
    {
        $this->assetId = $assetId;

        return $this;
    }

    /**
     * @param ?string $assetKey
     * @return $this
     */
    public function withAssetKey(?string $assetKey)
    {
        $this->assetKey = $assetKey;

        return $this;
    }

    /**
     * @param ?TypeResourceIdentifier $type
     * @return $this
     */
    public function withType(?TypeResourceIdentifier $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param ?FieldContainer $fields
     * @return $this
     */
    public function withFields(?FieldContainer $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @deprecated use withType() instead
     * @return $this
     */
    public function withTypeBuilder(?TypeResourceIdentifierBuilder $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @deprecated use withFields() instead
     * @return $this
     */
    public function withFieldsBuilder(?FieldContainerBuilder $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    public function build(): CategorySetAssetCustomTypeAction
    {
        return new CategorySetAssetCustomTypeActionModel(
            $this->assetId,
            $this->assetKey,
            $this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type,
            $this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields
        );
    }

    public static function of(): CategorySetAssetCustomTypeActionBuilder
    {
        return new self();
    }
}
