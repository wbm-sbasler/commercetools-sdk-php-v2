<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Api\Models\StagedQuote\StagedQuoteResourceIdentifier;
use Commercetools\Api\Models\StagedQuote\StagedQuoteResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<QuoteDraft>
 */
final class QuoteDraftBuilder implements Builder
{
    /**
     * @var null|StagedQuoteResourceIdentifier|StagedQuoteResourceIdentifierBuilder
     */
    private $stagedQuote;

    /**
     * @var ?int
     */
    private $stagedQuoteVersion;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>The StagedQuote from which this Quote is created.</p>
     *
     * @return null|StagedQuoteResourceIdentifier
     */
    public function getStagedQuote()
    {
        return $this->stagedQuote instanceof StagedQuoteResourceIdentifierBuilder ? $this->stagedQuote->build() : $this->stagedQuote;
    }

    /**
     * <p>Current version of the StagedQuote.</p>
     *
     * @return null|int
     */
    public function getStagedQuoteVersion()
    {
        return $this->stagedQuoteVersion;
    }

    /**
     * <p>User-defined unique identifier for the Quote.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p><a href="/../api/projects/custom-fields">Custom Fields</a> to be added to the Quote.</p>
     * <ul>
     * <li>If specified, the Custom Fields are merged with the Custom Fields on the referenced <a href="/../api/projects/staged-quotes#stagedquote">StagedQuote</a> and added to the Quote.</li>
     * <li>If empty, the Custom Fields on the referenced <a href="/../api/projects/staged-quotes#stagedquote">StagedQuote</a> are added to the Quote automatically.</li>
     * </ul>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?StagedQuoteResourceIdentifier $stagedQuote
     * @return $this
     */
    public function withStagedQuote(?StagedQuoteResourceIdentifier $stagedQuote)
    {
        $this->stagedQuote = $stagedQuote;

        return $this;
    }

    /**
     * @param ?int $stagedQuoteVersion
     * @return $this
     */
    public function withStagedQuoteVersion(?int $stagedQuoteVersion)
    {
        $this->stagedQuoteVersion = $stagedQuoteVersion;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withStagedQuote() instead
     * @return $this
     */
    public function withStagedQuoteBuilder(?StagedQuoteResourceIdentifierBuilder $stagedQuote)
    {
        $this->stagedQuote = $stagedQuote;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): QuoteDraft
    {
        return new QuoteDraftModel(
            $this->stagedQuote instanceof StagedQuoteResourceIdentifierBuilder ? $this->stagedQuote->build() : $this->stagedQuote,
            $this->stagedQuoteVersion,
            $this->key,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): QuoteDraftBuilder
    {
        return new self();
    }
}
