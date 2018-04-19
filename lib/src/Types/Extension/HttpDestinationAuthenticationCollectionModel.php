<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class HttpDestinationAuthenticationCollectionModel extends JsonCollection implements HttpDestinationAuthenticationCollection
{

    /**
     * @param HttpDestinationAuthentication $value
     * @return HttpDestinationAuthenticationCollection
     */
    public function add($value) {
        if (!$value instanceof HttpDestinationAuthentication) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return HttpDestinationAuthentication
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof HttpDestinationAuthentication) {
            $resolvedClass = $this->resolveDiscriminator(HttpDestinationAuthentication::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
