<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\Project\ProjectUpdateAction;

use Commercetools\Types\Project\ProjectChangeCountriesAction;
use Commercetools\Types\Project\ProjectChangeCurrenciesAction;
use Commercetools\Types\Project\ProjectChangeLanguagesAction;
use Commercetools\Types\Project\ProjectChangeMessagesEnabledAction;
use Commercetools\Types\Project\ProjectChangeNameAction;
use Commercetools\Types\Project\ProjectSetShippingRateInputTypeAction;
use Commercetools\Types\Project\Project;
use Commercetools\Types\Project\ProjectUpdate;
use Commercetools\Request\ByProjectKeyPost;


class ProjectUpdateBuilder extends BaseBuilder {
    /**
     * @var Project
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    private $requestBuilderCallback;

    public function __construct(callable $requestBuilderCallback = null)
    {
        $this->requestBuilderCallback = $requestBuilderCallback;
    }

    /**
     * @param ProjectChangeCountriesAction|callable $action builder function <code>
     *   function(ProjectChangeCountriesAction $action): ProjectChangeCountriesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeCountries($action = null)
    {
        $action = $this->resolveAction(ProjectChangeCountriesAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProjectChangeCurrenciesAction|callable $action builder function <code>
     *   function(ProjectChangeCurrenciesAction $action): ProjectChangeCurrenciesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeCurrencies($action = null)
    {
        $action = $this->resolveAction(ProjectChangeCurrenciesAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProjectChangeLanguagesAction|callable $action builder function <code>
     *   function(ProjectChangeLanguagesAction $action): ProjectChangeLanguagesAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLanguages($action = null)
    {
        $action = $this->resolveAction(ProjectChangeLanguagesAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProjectChangeMessagesEnabledAction|callable $action builder function <code>
     *   function(ProjectChangeMessagesEnabledAction $action): ProjectChangeMessagesEnabledAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeMessagesEnabled($action = null)
    {
        $action = $this->resolveAction(ProjectChangeMessagesEnabledAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProjectChangeNameAction|callable $action builder function <code>
     *   function(ProjectChangeNameAction $action): ProjectChangeNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName($action = null)
    {
        $action = $this->resolveAction(ProjectChangeNameAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ProjectSetShippingRateInputTypeAction|callable $action builder function <code>
     *   function(ProjectSetShippingRateInputTypeAction $action): ProjectSetShippingRateInputTypeAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingRateInputType($action = null)
    {
        $action = $this->resolveAction(ProjectSetShippingRateInputTypeAction::class, $action);
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }

    /**
     * @param ProjectUpdateAction $action
     * @return $this;
     */
    public function addAction(ProjectUpdateAction $action)
    {
        $this->actions[] = $action;
        return $this;
    }

    private function resolveAction($class, $action = null) {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData($class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof $class) {
            throw new \InvalidArgumentException();
        }

        return $action;
    }

    /*
     * @param $action
     * @param callable $callback
     */
    private function callback($action, callable $callback = null) {
        if (!is_null($callback)) {
            $action = $callback($action);
        }
        return $action;
    }

    /**
     * @param Project $project
     * @return $this
     */
    public function with(Project $project)
    {
        $this->resource = $project;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?Project
    {
        return $this->resource;
    }

    /**
     * Build ProjectUpdate
     * @return ProjectUpdate
     */
    public function build(): ProjectUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(ProjectUpdate::class, $data);
        if ($update instanceof ProjectUpdate &&
            $this->resource instanceof Project
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}
