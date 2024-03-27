<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Service\Provider\Layout;

interface RelLinkProviderInterface
{
    public const RESOURCE_AS = 'as';
    public const RESOURCE_PATH = 'path';
    public const RESOURCE_TYPE = 'type';

    /**
     * @return string[][]
     */
    public function get(): array;
}
