<?php
declare(strict_types=1);

namespace E3Chain\Recruiting\Tests\ProductTransaction;

use E3Chain\Recruiting\ProductTransaction\Repository\ProductRepositoryInterface;
use E3Chain\Recruiting\ProductTransaction\Service\UnorderedProductService;
use PHPUnit\Framework\TestCase;

/**
 * Created by lei
 */
class UnorderedProductServiceTest extends TestCase
{
    public function testFindUnOrderedProductByUserId()
    {
        $mockProduct = ['test' => 'mock_product'];
        $ProductRepositoryProphecy = $this->prophesize(ProductRepositoryInterface::class);
        $ProductRepositoryProphecy->findProductsByUserId('test')->shouldBeCalled()->willReturn($mockProduct);
        $testSubject = new UnorderedProductService($ProductRepositoryProphecy->reveal());

        $this->assertEquals($testSubject->findProducts('test'), $mockProduct);
    }
}
