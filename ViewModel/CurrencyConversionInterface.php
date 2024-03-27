<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\ViewModel;

use Klevu\Frontend\Exception\InvalidIsEnabledDeterminerException;
use Magento\Framework\View\Element\Block\ArgumentInterface;

interface CurrencyConversionInterface extends ArgumentInterface
{
    /**
     * @return bool
     * @throws InvalidIsEnabledDeterminerException
     */
    public function isEnabled(): bool;
    
    /**
     * @return float
     */
    public function getExchangeRate(): float;

    /**
     * @return string
     */
    public function getCurrencySymbol(): string;
}
