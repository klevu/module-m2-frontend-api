<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Service\Provider\Customer;

interface CustomerDataEndpointProviderInterface
{
    /**
     * @return string
     */
    public function get(): string;
}
