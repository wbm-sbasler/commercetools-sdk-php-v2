<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Order\OrderUpdateActionModel;

use Commercetools\Types\State\StateReference;

class OrderTransitionCustomLineItemStateActionModel extends OrderUpdateActionModel implements OrderTransitionCustomLineItemStateAction
{
    const DISCRIMINATOR_VALUE = 'transitionCustomLineItemState';

    /**
     * @var \DateTimeImmutable
     */
    protected $actualTransitionDate;
    /**
     * @var string
     */
    protected $customLineItemId;
    /**
     * @var StateReference
     */
    protected $fromState;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var StateReference
     */
    protected $toState;

    /**
     * @return \DateTimeImmutable
     */
    public function getActualTransitionDate()
    {
        if (is_null($this->actualTransitionDate)) {
            $value = $this->raw(OrderTransitionCustomLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->actualTransitionDate = $value;
        }
        return $this->actualTransitionDate;
    }
    /**
     * @return string
     */
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            $value = $this->raw(OrderTransitionCustomLineItemStateAction::FIELD_CUSTOM_LINE_ITEM_ID);
            $value = (string)$value;
            $this->customLineItemId = $value;
        }
        return $this->customLineItemId;
    }
    /**
     * @return StateReference
     */
    public function getFromState()
    {
        if (is_null($this->fromState)) {
            $value = $this->raw(OrderTransitionCustomLineItemStateAction::FIELD_FROM_STATE);
            if (is_null($value)) {
                return $this->mapData(StateReference::class, null);
            }
            $value = $this->mapData(StateReference::class, $value);

            $this->fromState = $value;
        }
        return $this->fromState;
    }
    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(OrderTransitionCustomLineItemStateAction::FIELD_QUANTITY);
            $value = (int)$value;
            $this->quantity = $value;
        }
        return $this->quantity;
    }
    /**
     * @return StateReference
     */
    public function getToState()
    {
        if (is_null($this->toState)) {
            $value = $this->raw(OrderTransitionCustomLineItemStateAction::FIELD_TO_STATE);
            if (is_null($value)) {
                return $this->mapData(StateReference::class, null);
            }
            $value = $this->mapData(StateReference::class, $value);

            $this->toState = $value;
        }
        return $this->toState;
    }

    /**
     * @param \DateTimeImmutable|\DateTime|string $actualTransitionDate
     * @return $this
     */
    public function setActualTransitionDate($actualTransitionDate)
    {
        if ($actualTransitionDate instanceof \DateTime) {
            $actualTransitionDate = \DateTimeImmutable::createFromMutable($actualTransitionDate);
        }
        if (!$actualTransitionDate instanceof \DateTimeImmutable) {
            $actualTransitionDate = new \DateTimeImmutable($actualTransitionDate);
        }
        $this->$actualTransitionDate = $actualTransitionDate;

        return $this;
    }
    /**
     * @param string $customLineItemId
     * @return $this
     */
    public function setCustomLineItemId(string $customLineItemId)
    {
        $this->customLineItemId = (string)$customLineItemId;

        return $this;
    }
    /**
     * @param StateReference $fromState
     * @return $this
     */
    public function setFromState(StateReference $fromState)
    {
        $this->fromState = $fromState;

        return $this;
    }
    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = (int)$quantity;

        return $this;
    }
    /**
     * @param StateReference $toState
     * @return $this
     */
    public function setToState(StateReference $toState)
    {
        $this->toState = $toState;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[OrderTransitionCustomLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE]) && $data[OrderTransitionCustomLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE] instanceof \DateTimeImmutable) {
            $data[OrderTransitionCustomLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE] = $data[OrderTransitionCustomLineItemStateAction::FIELD_ACTUAL_TRANSITION_DATE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
