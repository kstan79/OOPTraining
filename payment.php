<?php
declare(strict_types = 1);
require "vendor/autoload.php";

use HR\Student;
use Payment\Payment;
use Payment\PaymentDetail;
use Product\Product;

$student = new Student("dummy");
if($student->fetchStudentFromId("1001")){
    $payment = new Payment($student);

    
    
    $products = ["eggtart","durian","magee"];

    foreach($products as $index => $productid){
        $prd = new Product();
        $prd->fetchProductFromId($productid);
        $pl = new PaymentDetail();
        $pl->setProduct($prd);
        $payment->addDetail($pl);
    }
    if($payment->save()){
        $histories = $student->getPaymentHistory();
        var_dump($histories);
    }
    // var_dump($payment);
    
}


