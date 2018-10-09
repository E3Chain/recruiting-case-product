<?php
declare(strict_types=1);

namespace E3Chain\Recruiting\ProductTransaction\Entity;

/**
 * Created by lei
 */
class Product
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $slug;

    /**
     * @var string
     */
    public $url;

    /**
     * @var \DateTimeInterface
     */
    public $createdAt;

    /**
     * @var array
     */
    public $transactions;
}
