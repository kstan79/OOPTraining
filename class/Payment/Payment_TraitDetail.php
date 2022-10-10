<?php

namespace Payment;
trait Payment_TraitDetail{

    /**
     * add new roll into payment object
     * @param PaymentDetail $line row object
     * @return bool success or fail
     */
    public function addDetail(PaymentDetail $line):bool{
        if($line->validate()){
            $this->paymentdetail[] = $line;
            return true;
        }else{
            return true;
        }
        
    }
    

}