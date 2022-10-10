<?php

namespace HR;
use Payment\Payment_History;
trait Student_TraitPayment{
    
    public function getPaymentHistory(): array{
        $payments = new Payment_History();        
        $paymentobj = $payments->filter($this);
        $data = $paymentobj->getData();
        
        return $data;
    }
}