<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\ViewModel\Html\Head;

use Magento\Framework\View\Element\Block\ArgumentInterface;

interface JsSettingsInterface extends ArgumentInterface
{
    /**
     * @return string|null
     */
    public function getKlevuJsSettings(): ?string;

    /**
     * @return bool
     */
    public function isSettingsGenerationError(): bool;
}
