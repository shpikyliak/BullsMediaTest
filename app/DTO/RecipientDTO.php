<?php

namespace App\DTO;

/**
 * Class RecipientDTO
 *
 * @package App\DTO
 */
class RecipientDTO
{
    /**
     * @var
     */
    public $fio;
    /**
     * @var
     */
    public $phone;
    /**
     * @var
     */
    public $email;
    /**
     * @var
     */
    public $address;

    /**
     * RecipientDTO constructor.
     *
     * @param $fio
     * @param $phone
     * @param $email
     * @param $address
     */
    public function __construct($fio, $phone, $email, $address)
    {
        $this->fio = $fio;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
    }


}
