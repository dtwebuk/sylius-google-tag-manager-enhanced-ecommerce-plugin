<?php declare(strict_types=1);

namespace SyliusGtmEnhancedEcommercePlugin\TagManager;

use Sylius\Component\Order\Model\OrderInterface;

/**
 * Interface CheckoutStepInterface
 * @package SyliusGtmEnhancedEcommercePlugin\TagManager
 */
interface CheckoutStepInterface
{
    /**
     * @param OrderInterface $order
     * @param int $step
     */
    public function addStep(OrderInterface $order, int $step): void;
}
