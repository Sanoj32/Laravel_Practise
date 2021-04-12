<?php
namespace App\Billing;
use Illuminate\Support\Str;
class PaymentGateway{
    public function charge($amount){
        return [
            'amount' => $amount,
            'conformation_number' => Str::random(),

        ];
    } 
}