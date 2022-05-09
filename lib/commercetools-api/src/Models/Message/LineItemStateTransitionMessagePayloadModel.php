<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class LineItemStateTransitionMessagePayloadModel extends JsonObjectModel implements LineItemStateTransitionMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'LineItemStateTransition';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $lineItemId;

    /**
     * @var ?DateTimeImmutable
     */
    protected $transitionDate;

    /**
     * @var ?int
     */
    protected $quantity;

    /**
     * @var ?StateReference
     */
    protected $fromState;

    /**
     * @var ?StateReference
     */
    protected $toState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $lineItemId = null,
        ?DateTimeImmutable $transitionDate = null,
        ?int $quantity = null,
        ?StateReference $fromState = null,
        ?StateReference $toState = null
    ) {
        $this->lineItemId = $lineItemId;
        $this->transitionDate = $transitionDate;
        $this->quantity = $quantity;
        $this->fromState = $fromState;
        $this->toState = $toState;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getTransitionDate()
    {
        if (is_null($this->transitionDate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TRANSITION_DATE);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->transitionDate = $data;
        }

        return $this->transitionDate;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *
     * @return null|StateReference
     */
    public function getFromState()
    {
        if (is_null($this->fromState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FROM_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->fromState = StateReferenceModel::of($data);
        }

        return $this->fromState;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *
     * @return null|StateReference
     */
    public function getToState()
    {
        if (is_null($this->toState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TO_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->toState = StateReferenceModel::of($data);
        }

        return $this->toState;
    }


    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    /**
     * @param ?DateTimeImmutable $transitionDate
     */
    public function setTransitionDate(?DateTimeImmutable $transitionDate): void
    {
        $this->transitionDate = $transitionDate;
    }

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?StateReference $fromState
     */
    public function setFromState(?StateReference $fromState): void
    {
        $this->fromState = $fromState;
    }

    /**
     * @param ?StateReference $toState
     */
    public function setToState(?StateReference $toState): void
    {
        $this->toState = $toState;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[LineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE]) && $data[LineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE] instanceof \DateTimeImmutable) {
            $data[LineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE] = $data[LineItemStateTransitionMessagePayload::FIELD_TRANSITION_DATE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
