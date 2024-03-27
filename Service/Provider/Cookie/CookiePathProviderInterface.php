<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Service\Provider\Cookie;

interface CookiePathProviderInterface
{
    /**
     * @return string
     */
    public function get(): string;
}
