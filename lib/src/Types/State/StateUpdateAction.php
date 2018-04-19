<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface StateUpdateAction extends UpdateAction
{
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'addRoles' => Types\State\StateAddRolesAction::class,
        'changeInitial' => Types\State\StateChangeInitialAction::class,
        'changeKey' => Types\State\StateChangeKeyAction::class,
        'changeType' => Types\State\StateChangeTypeAction::class,
        'removeRoles' => Types\State\StateRemoveRolesAction::class,
        'setDescription' => Types\State\StateSetDescriptionAction::class,
        'setName' => Types\State\StateSetNameAction::class,
        'setRoles' => Types\State\StateSetRolesAction::class,
        'setTransitions' => Types\State\StateSetTransitionsAction::class,

    ];

}
