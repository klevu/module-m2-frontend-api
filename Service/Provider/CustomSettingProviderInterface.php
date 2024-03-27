<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Service\Provider;

use Klevu\Frontend\Exception\InvalidCustomSettingValueException;

interface CustomSettingProviderInterface
{
    /**
     * @return bool|int|string|null
     * @throws InvalidCustomSettingValueException
     */
    public function get(): bool|int|string|null;
}
