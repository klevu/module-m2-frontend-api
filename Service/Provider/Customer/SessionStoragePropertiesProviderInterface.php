<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Service\Provider\Customer;

interface SessionStoragePropertiesProviderInterface
{
    /**
     * @return string
     */
    public function getStorageKey(): string;

    /**
     * @return string
     */
    public function getCustomerDataSectionKey(): string;
}
