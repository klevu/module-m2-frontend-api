<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Service;

use Klevu\Frontend\Exception\InvalidDelayPowerUpDeterminerException;
use Klevu\Frontend\Exception\OutputDisabledException;
use Klevu\FrontendApi\Service\DelayPowerUpCondition\DelayPowerUpConditionInterface;

interface DelayPowerUpDeterminerInterface
{
    /**
     * @param array<DelayPowerUpConditionInterface|DelayPowerUpConditionInterface[]> $delayPowerUpConditions
     *
     * @return void
     * @throws InvalidDelayPowerUpDeterminerException
     * @throws OutputDisabledException
     */
    public function executeAnd(array $delayPowerUpConditions): void;

    /**
     * @param array<DelayPowerUpConditionInterface|DelayPowerUpConditionInterface[]> $delayPowerUpConditions
     *
     * @return void
     * @throws InvalidDelayPowerUpDeterminerException
     * @throws OutputDisabledException
     */
    public function executeOr(array $delayPowerUpConditions): void;
}
