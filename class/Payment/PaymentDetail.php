<?php

namespace Payment;
use Product\Product;
use ValidationInterface\ValidationInterface;

class PaymentDetail implements ValidationInterface{

    protected string $paymentline_id;
    protected Product $product;

    public function __construct(){

    }

    public function setProduct(Product $prod){
        $this->product = $prod;
    }

    public function validate():bool{
        return true;
    }
}