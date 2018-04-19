<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\FieldTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomFieldTimeTypeCollectionModel extends FieldTypeCollectionModel implements CustomFieldTimeTypeCollection
{

    /**
     * @param CustomFieldTimeType $value
     * @return CustomFieldTimeTypeCollection
     */
    public function add($value) {
        if (!$value instanceof CustomFieldTimeType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomFieldTimeType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomFieldTimeType) {
            $data = $this->mapData(CustomFieldTimeType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
