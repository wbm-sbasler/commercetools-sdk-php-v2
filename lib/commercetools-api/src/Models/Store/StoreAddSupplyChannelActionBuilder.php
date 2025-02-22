<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreAddSupplyChannelAction>
 */
final class StoreAddSupplyChannelActionBuilder implements Builder
{
    /**
     * @var null|ChannelResourceIdentifier|ChannelResourceIdentifierBuilder
     */
    private $supplyChannel;

    /**
     * <p>Any attempt to use <a href="ctp:api:type:Channel">Channel</a> without the <code>InventorySupply</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a> will fail with a <a href="ctp:api:type:MissingRoleOnChannelError">MissingRoleOnChannel</a> error.</p>
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel instanceof ChannelResourceIdentifierBuilder ? $this->supplyChannel->build() : $this->supplyChannel;
    }

    /**
     * @param ?ChannelResourceIdentifier $supplyChannel
     * @return $this
     */
    public function withSupplyChannel(?ChannelResourceIdentifier $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @deprecated use withSupplyChannel() instead
     * @return $this
     */
    public function withSupplyChannelBuilder(?ChannelResourceIdentifierBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    public function build(): StoreAddSupplyChannelAction
    {
        return new StoreAddSupplyChannelActionModel(
            $this->supplyChannel instanceof ChannelResourceIdentifierBuilder ? $this->supplyChannel->build() : $this->supplyChannel
        );
    }

    public static function of(): StoreAddSupplyChannelActionBuilder
    {
        return new self();
    }
}
