<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\ViewModel\Html\Head;

use Magento\Framework\View\Element\Block\ArgumentInterface;

interface AddToCartInterface extends ArgumentInterface
{
    /**
     * @return bool
     */
    public function isEnabled(): bool;

    /**
     * @param int|null $productId
     *
     * @return string
     */
    public function getAddToCartUrl(?int $productId = null): string;

    /**
     * @return string
     */
    public function getFormKey(): string;
}
