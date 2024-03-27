<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Service\Provider\Customer;

use Klevu\FrontendApi\Api\Data\CustomerDataInterface;

interface CustomerDataProviderInterface
{
    /**
     * @return CustomerDataInterface
     */
    public function get(): CustomerDataInterface;
}
