<?php


namespace App\Orders;


use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGatewayContract;

class OrderDetails
{
    /**
     * @var CreditPaymentGateway
     */
    private $paymentGateway;

    public function __construct(PaymentGatewayContract $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all()
    {
        $this->paymentGateway->setDiscount(500);

        return [
            'name' => 'Victor',
            'address' => '123 Coder\' Tape Street',
        ];
    }
}
