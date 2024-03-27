<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Service\Action;

interface SetCookieActionInterface
{
    /**
     * @param string $name
     * @param mixed[] $data
     *
     * @return void
     */
    public function execute(string $name, array $data): void;
}
