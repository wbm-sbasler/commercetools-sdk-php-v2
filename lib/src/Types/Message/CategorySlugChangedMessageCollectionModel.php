<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CategorySlugChangedMessageCollectionModel extends MessageCollectionModel implements CategorySlugChangedMessageCollection
{

    /**
     * @param CategorySlugChangedMessage $value
     * @return CategorySlugChangedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof CategorySlugChangedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategorySlugChangedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategorySlugChangedMessage) {
            $data = $this->mapData(CategorySlugChangedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
