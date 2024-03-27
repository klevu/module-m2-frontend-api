<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Service\Provider;

interface CurrencyProviderInterface
{
    /**
     * @return array<string, array<string, float|string>>
     */
    public function get(): array;
}
