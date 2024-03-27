<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Service\Provider;

use Klevu\Frontend\Exception\InvalidCustomSettingValueException;

interface CustomSettingsProviderInterface
{
    /**
     * @return string[][]
     * @throws InvalidCustomSettingValueException
     */
    public function get(): array;
}
