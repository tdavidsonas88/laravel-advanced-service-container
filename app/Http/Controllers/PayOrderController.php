<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(PaymentGateway $paymentGateway)
    {
        dd($paymentGateway->charege(2500));
    }
}
