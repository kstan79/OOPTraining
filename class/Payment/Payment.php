<?php

namespace Payment;
use HR\Student;
use ValidationInterface\ValidationInterface;

class Payment implements ValidationInterface{
    use Payment_TraitDetail;
    protected Student $student;
    protected string $document_date;
    protected string $document_no;
    protected float $totalamount;
    protected array $paymentdetail=[];

    public function __construct(Student $student){
        $this->student = $student;
    }

    public function validate():bool{
        return true;
    }
    public function save():bool{
        return true;
    }
}