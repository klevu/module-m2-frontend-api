<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

interface JsIncludesInterface extends ArgumentInterface
{
    /**
     * @return string[]
     */
    public function getLinks(): array;
}
