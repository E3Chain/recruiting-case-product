<?php
declare(strict_types=1);

namespace E3Chain\Recruiting\ProductTransaction\Entity;

/**
 * Created by lei
 */
class Transaction
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var float
     */
    public $price;

    /**
     * @var \DateTimeInterface
     */
    public $purchasedAt;

    /**
     * @var User
     */
    public $purchasedBy;
}
