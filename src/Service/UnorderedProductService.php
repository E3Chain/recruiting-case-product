<?php
declare(strict_types=1);

namespace E3Chain\Recruiting\ProductTransaction\Service;

use E3Chain\Recruiting\ProductTransaction\Repository\ProductRepositoryInterface;

/**
 * Created by lei
 */
class UnorderedProductService implements ProductServiceInterface
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function findProducts(string $userId): array
    {
        return $this->productRepository->findProductsByUserId($userId);
    }
}
