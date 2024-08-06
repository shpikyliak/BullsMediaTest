<?php

namespace App\Components\Delivery;

use App\DTO\PackageDTO;
use App\DTO\RecipientDTO;

/**
 * Interface DeliveryInterface
 *
 * @package App\Components\Delivery
 */
interface DeliveryInterface
{
    /**
     * @param  PackageDTO  $package
     * @param  RecipientDTO  $recipient
     *
     * @return mixed
     */
    public function prepareData(PackageDTO $package, RecipientDTO $recipient);

    /**
     * To simplify logic, let's assume that method return only responce code, but in real life probably it will be some responce message
     * @return int
     */
    public function send(): int;
}
