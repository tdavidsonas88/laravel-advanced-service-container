<?php


namespace App\Billing;


use Illuminate\Support\Str;

class PaymentGateway
{
    private $currency;

    public function __construct($currency)
    {
        $this->currency = $currency;
    }

    public function charege($amount)
    {
        return [
            'amount' => $amount,
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
        ];
    }
}
