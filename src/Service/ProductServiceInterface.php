<?php
declare(strict_types=1);

namespace E3Chain\Recruiting\ProductTransaction\Service;

use E3Chain\Recruiting\ProductTransaction\Entity\Product;

/**
 * Created by lei
 */
interface ProductServiceInterface
{
    /**
     * @param string $userId
     * @return Product[]
     */
    public function findProducts(string $userId): array;
}
