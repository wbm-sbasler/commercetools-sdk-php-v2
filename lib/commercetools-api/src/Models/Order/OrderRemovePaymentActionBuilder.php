<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Payment\PaymentResourceIdentifier;
use Commercetools\Api\Models\Payment\PaymentResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderRemovePaymentAction>
 */
final class OrderRemovePaymentActionBuilder implements Builder
{
    /**
     * @var null|PaymentResourceIdentifier|PaymentResourceIdentifierBuilder
     */
    private $payment;

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:Payment">Payment</a>.</p>
     *
     * @return null|PaymentResourceIdentifier
     */
    public function getPayment()
    {
        return $this->payment instanceof PaymentResourceIdentifierBuilder ? $this->payment->build() : $this->payment;
    }

    /**
     * @param ?PaymentResourceIdentifier $payment
     * @return $this
     */
    public function withPayment(?PaymentResourceIdentifier $payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * @deprecated use withPayment() instead
     * @return $this
     */
    public function withPaymentBuilder(?PaymentResourceIdentifierBuilder $payment)
    {
        $this->payment = $payment;

        return $this;
    }

    public function build(): OrderRemovePaymentAction
    {
        return new OrderRemovePaymentActionModel(
            $this->payment instanceof PaymentResourceIdentifierBuilder ? $this->payment->build() : $this->payment
        );
    }

    public static function of(): OrderRemovePaymentActionBuilder
    {
        return new self();
    }
}
