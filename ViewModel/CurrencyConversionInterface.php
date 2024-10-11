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

    /**
     * @return int
     */
    public function getCurrencyPrecision(): int;

    /**
     * @return string
     */
    public function getCurrencyDecimalSymbol(): string;

    /**
     * @return string
     */
    public function getCurrencyGroupSymbol(): string;

    /**
     * @return int
     */
    public function getCurrencyGroupLength(): int;

    /**
     * @return string
     */
    public function getCurrencyFormat(): string;

    /**
     * @return string
     */
    public function getCurrencyAppendAtLast(): string;
}
