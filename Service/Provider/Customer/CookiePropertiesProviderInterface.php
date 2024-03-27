<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Service\Provider\Customer;

interface CookiePropertiesProviderInterface
{
    /**
     * @return string
     */
    public function getCookieKey(): string;

    /**
     * @return string
     */
    public function getExpireSectionsKey(): string;

    /**
     * @return string
     */
    public function getCustomerDataSectionKey(): string;
}
