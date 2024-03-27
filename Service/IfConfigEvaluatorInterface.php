<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Service;

interface IfConfigEvaluatorInterface
{
    /**
     * @param mixed $value
     * @param mixed[] $conditions
     *
     * @return bool
     */
    public function execute(mixed $value, array $conditions): bool;
}
