<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\ViewModel\Html\Head;

use Magento\Framework\View\Element\Block\ArgumentInterface;

interface CustomerDataInterface extends ArgumentInterface
{
    /**
     * @return bool
     */
    public function isOutputEnabled(): bool;
    
    /**
     * @return string
     */
    public function getCustomerDataApiEndpoint(): string;

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
    public function getCustomerDataKey(): string;

    /**
     * @return int
     */
    public function getCustomerDataSectionLifetime(): int;

    /**
     * @return string
     */
    public function getCustomerDataLoadedEventName(): string;

    /**
     * @return string
     */
    public function getCustomerDataLoadErrorEventName(): string;
}
