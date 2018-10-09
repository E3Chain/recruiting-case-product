<?php
declare(strict_types=1);

namespace E3Chain\Recruiting\ProductTransaction\Repository;

use E3Chain\Recruiting\ProductTransaction\Entity\Product;

/**
 * Created by lei
 */
interface ProductRepositoryInterface
{
    /**
     * @param string $userId
     * @return Product[]
     */
    public function findProductsByUserId(string $userId): array;
}
