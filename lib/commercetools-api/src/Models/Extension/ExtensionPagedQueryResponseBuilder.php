<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionPagedQueryResponse>
 */
final class ExtensionPagedQueryResponseBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $limit;

    /**
     * @var ?int
     */
    private $offset;

    /**
     * @var ?int
     */
    private $count;

    /**
     * @var ?int
     */
    private $total;

    /**
     * @var ?ExtensionCollection
     */
    private $results;

    /**
     * <p>Number of results requested in the query request.</p>
     *
     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <p>Offset supplied by the client or server default. It is the number of elements skipped, not a page number.</p>
     *
     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * <p>Actual number of results returned.</p>
     *
     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <p>Total number of results matching the query.
     * This number is an estimation that is not <a href="/../api/general-concepts#strong-consistency">strongly consistent</a>.
     * This field is returned by default.
     * For improved performance, calculating this field can be deactivated by using the query parameter <code>withTotal=false</code>.
     * When the results are filtered with a <a href="/../api/predicates/query">Query Predicate</a>, <code>total</code> is subject to a <a href="/../api/limits#queries">limit</a>.</p>
     *
     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * <p>Extensions matching the query.</p>
     *
     * @return null|ExtensionCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param ?int $limit
     * @return $this
     */
    public function withLimit(?int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param ?int $offset
     * @return $this
     */
    public function withOffset(?int $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param ?int $count
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @param ?int $total
     * @return $this
     */
    public function withTotal(?int $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @param ?ExtensionCollection $results
     * @return $this
     */
    public function withResults(?ExtensionCollection $results)
    {
        $this->results = $results;

        return $this;
    }


    public function build(): ExtensionPagedQueryResponse
    {
        return new ExtensionPagedQueryResponseModel(
            $this->limit,
            $this->offset,
            $this->count,
            $this->total,
            $this->results
        );
    }

    public static function of(): ExtensionPagedQueryResponseBuilder
    {
        return new self();
    }
}
