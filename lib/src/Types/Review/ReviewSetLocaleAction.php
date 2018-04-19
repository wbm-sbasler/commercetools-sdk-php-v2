<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

interface ReviewSetLocaleAction extends ReviewUpdateAction
{
    const FIELD_LOCALE = 'locale';

    /**
     * @return string
     */
    public function getLocale();

    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale(string $locale);

}
