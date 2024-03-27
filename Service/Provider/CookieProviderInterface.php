<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Service\Provider;

interface CookieProviderInterface
{
    /**
     * @param string $name
     *
     * @return mixed[]
     */
    public function get(string $name): array;
}
