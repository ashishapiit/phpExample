<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PayPal {

    function payment($amount) {
        echo "Payment of " . $amount;
    }

    function getAccount() {
        
    }

    function setAccout() {
        
    }

}
class SBIPaymentGateway {

    function myPayment($amount) {
        echo "Payment of " . $amount;
    }

    function getAccount() {
        
    }

    function setAccout() {
        
    }

}

interface paymentAdapter {

    function pay($amount);
}

class SBIPaymentGatewayAdaptor implements paymentAdapter {
    
    public $sbiPayment;
    public function __construct(SBIPaymentGateway $sbi) {
        $this->sbiPayment = $sbi;
    }

    public function pay($amount) {
        $this->sbiPayment->myPayment($amount);
    }

}
class PaypalAdaptor implements paymentAdapter {
    
    public $paypal;
    public function __construct(PayPal $paypal) {
        $this->paypal = $paypal;
    }

    public function pay($amount) {
        $this->paypal->payment($amount);
    }

}

$payment = new SBIPaymentGatewayAdaptor(new SBIPaymentGateway());
$payment->pay(200);
