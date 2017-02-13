<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategoryUpdate extends Update {
    protected $actions;

    /**
     * @return CategoryUpdateActionCollection
     */
    public function getActions(): CategoryUpdateActionCollection
    {
        if (is_null($this->actions)) {
            $value = $this->raw('actions');
            if (!is_null($value)) {
                $this->actions = Mapper::map($value, CategoryUpdateActionCollection::class);
            } else {
                return Mapper::map([], CategoryUpdateActionCollection::class);
            }
        }
        return $this->actions;
    }
                
}
