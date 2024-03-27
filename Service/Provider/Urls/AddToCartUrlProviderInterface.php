<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Service\Provider\Urls;

interface AddToCartUrlProviderInterface
{
    /**
     * @param int|null $productId
     * @param mixed[]|null $additional
     *
     * @return string
     */
    public function get(?int $productId = null, ?array $additional = []): string;
}
