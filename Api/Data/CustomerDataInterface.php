<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendApi\Api\Data;

interface CustomerDataInterface
{
    /**
     * @return string
     */
    public function getSessionId(): string;

    /**
     * @param string $sessionId
     *
     * @return void
     */
    public function setSessionId(string $sessionId): void;

    /**
     * @return int|null
     */
    public function getCustomerGroupId(): ?int;

    /**
     * @param int $customerGroupId
     *
     * @return void
     */
    public function setCustomerGroupId(int $customerGroupId): void;

    /**
     * @return string|null
     */
    public function getIdCode(): ?string;

    /**
     * @param string $idCode
     *
     * @return void
     */
    public function setIdCode(string $idCode): void;

    /**
     * @return string
     */
    public function getShopperIp(): string;

    /**
     * @param string $shopperIp
     *
     * @return void
     */
    public function setShopperIp(string $shopperIp): void;

    /**
     * @return int
     */
    public function getRevalidateAfter(): int;

    /**
     * @param int $revalidateAfter
     *
     * @return void
     */
    public function setRevalidateAfter(int $revalidateAfter): void;
}
