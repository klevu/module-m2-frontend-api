<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Service\Provider\Cookie;

interface CookieDurationProviderInterface
{
    /**
     * @return int
     */
    public function get(): int;
}
