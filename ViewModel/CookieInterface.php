<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

interface CookieInterface extends ArgumentInterface
{
    /**
     * @return int
     */
    public function getCookieLifetime(): int;

    /**
     * @return string
     */
    public function getCookiePath(): string;
}
