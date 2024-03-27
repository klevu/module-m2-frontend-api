<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

interface SessionStorageInterface extends ArgumentInterface
{
    /**
     * @return string
     */
    public function getSessionStorageKey(): string;

    /**
     * @return string
     */
    public function getSessionCustomerDataSectionKey(): string;
}
