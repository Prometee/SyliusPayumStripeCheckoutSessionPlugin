<?php

declare(strict_types=1);

namespace FluxSE\SyliusPayumStripePlugin\Provider;

use Sylius\Component\Core\Model\OrderInterface;

interface ShippingLineItemProviderInterface
{
    public function getLineItem(OrderInterface $order): ?array;
}
