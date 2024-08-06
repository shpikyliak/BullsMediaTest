<?php

namespace App\Http\Requests;

use App\DTO\PackageDTO;
use App\DTO\RecipientDTO;
use Illuminate\Foundation\Http\FormRequest;

class DeliveryRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "package.weight" => "required",
            "package.height" => "required",
            "package.width" => "required",
            "package.depth" => "required",

            "recipient.name" => "required",
            "recipient.phone" => "required",
            "recipient.email" => "required",
            "recipient.address" => "required",
        ];
    }

    /**
     * Handle delivery info into recipient package Dto
     * @return PackageDTO
     */
    public function getPackageDTO(): PackageDTO
    {
        return new PackageDTO(
            $this->package['weight'],
            $this->package['height'],
            $this->package['width'],
            $this->package['depth']
        );
    }

    /**
     * Handle delivery info into recipient Dto
     * @return RecipientDTO
     */
    public function getRecipientDTO(): RecipientDTO
    {
        return new RecipientDTO(
            $this->recipient['name'],
            $this->recipient['phone'],
            $this->recipient['email'],
            $this->recipient['address']
        );
    }
}
