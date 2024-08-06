<?php

namespace App\Components\Delivery;

use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Class DeliveryResolver
 * Resolve delivery service slug to class path
 *
 * @package App\Components\Delivery
 */
final class DeliveryResolver
{
    /**
     * Delivery service slug from url
     * @var
     */
    public $classSlug;

    /**
     * Dictionary delivery slug to delivery class path
     * @var string[]
     */
    private $resolveData = [
        "np" => NovaPoshta::class
    ];

    /**
     * DeliveryResolver constructor.
     *
     * @param $classSlug
     */
    public function __construct($classSlug)
    {
        $this->classSlug = $classSlug;
    }


    /**
     * @return string
     */
    public function resolveDependencyName(): string
    {
        if(isset($this->resolveData[$this->classSlug]))
        {
            return $this->resolveData[$this->classSlug];
        }

        //throwing validation error, that model not found. Can be change to another exception
        throw new ModelNotFoundException();
    }
}
