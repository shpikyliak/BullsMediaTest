<?php

namespace App\Components\Delivery;

use App\DTO\PackageDTO;
use App\DTO\RecipientDTO;

/**
 * Class NovaPoshta
 * Example of delivery service realization
 * @package App\Components\Delivery
 */
class NovaPoshta implements DeliveryInterface
{
    /**
     * @var array
     */
    public  $data = [];

    /**
     * This method prepare data for sending to delivery service. Here is place to customize data, depends on service needs;
     *
     * @param  PackageDTO  $package
     * @param  RecipientDTO  $recipient
     *
     * @return mixed|void
     */
    public function prepareData(PackageDTO $package, RecipientDTO $recipient)
    {
        $this->data = [
            "customer_name" => $recipient->fio,
            "phone_number" => $recipient->phone,
            "email" => $recipient->email,
            "sender_address" => env("SENDER_ADDRESS"), // sound like it is constant, but can be change to dynamic once. Also can be moved from env inside this class as property
            "recipient_address" => $recipient->address,
        ];
    }

    /**
     * Method to send data to service. Here is place to handle services error, save responses or requests to database or logging
     *
     * @return int
     */
    public function send(): int
    {
        // Implement method, depends on service

        return 200;
    }
}
