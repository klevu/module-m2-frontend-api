<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

interface CustomerGroupSuffixInterface extends ArgumentInterface
{
    /**
     * @return bool
     */
    public function isEnabled(): bool;

    /**
     * @return string
     */
    public function getSessionStorageKey(): string;

    /**
     * @return string
     */
    public function getCustomerDataKey(): string;

    /**
     * @return string
     */
    public function getBaseCurrencyCode(): string;

    /**
     * @return int
     */
    public function getDefaultCustomerGroupId(): int;

    /**
     * @return string
     */
    public function getCustomerGroupIdPrefix(): string;
}
