<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Service;

use Klevu\Frontend\Exception\InvalidCustomSettingValueException;
use Klevu\Frontend\Exception\InvalidSettingsProviderConfigurationException;

interface CustomSettingsBuilderInterface
{
    /**
     * @param mixed[]|null $settings
     *
     * @return mixed[]
     * @throws InvalidSettingsProviderConfigurationException
     * @throws InvalidCustomSettingValueException
     */
    public function execute(?array $settings = []): array;
}
