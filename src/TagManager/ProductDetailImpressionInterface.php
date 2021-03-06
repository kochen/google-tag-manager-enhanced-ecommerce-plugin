<?php declare(strict_types=1);

namespace GtmEnhancedEcommercePlugin\TagManager;

use Sylius\Component\Core\Model\ProductInterface;

/**
 * Interface ProductDetailImpressionInterface
 * @package GtmEnhancedEcommercePlugin\TagManager
 */
interface ProductDetailImpressionInterface
{
    /**
     * @param ProductInterface $product
     */
    public function add(ProductInterface $product): void;
}
