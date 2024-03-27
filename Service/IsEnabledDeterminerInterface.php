<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Service;

use Klevu\Frontend\Exception\InvalidIsEnabledDeterminerException;
use Klevu\Frontend\Exception\OutputDisabledException;

interface IsEnabledDeterminerInterface
{
    /**
     * @param mixed[] $isEnabledConditions
     *
     * @return void
     * @throws InvalidIsEnabledDeterminerException
     * @throws OutputDisabledException
     */
    public function executeAnd(array $isEnabledConditions): void;

    /**
     * @param mixed[] $isEnabledConditions
     *
     * @return void
     * @throws InvalidIsEnabledDeterminerException
     * @throws OutputDisabledException
     */
    public function executeOr(array $isEnabledConditions): void;
}
