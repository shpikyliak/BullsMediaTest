<?php

namespace App\DTO;

/**
 * Class PackageDTO
 *
 * @package App\DTO
 */
class PackageDTO
{
    /**
     * @var
     */
    public $weight;
    /**
     * @var
     */
    public $height;
    /**
     * @var
     */
    public $width;
    /**
     * @var
     */
    public $depth;

    /**
     * PackageDTO constructor.
     *
     * @param $weight
     * @param $height
     * @param $width
     * @param $depth
     */
    public function __construct($weight, $height, $width, $depth)
    {
        $this->weight = $weight;
        $this->height = $height;
        $this->width = $width;
        $this->depth = $depth;
    }


}
