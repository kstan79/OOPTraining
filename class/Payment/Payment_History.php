<?php
namespace Payment;
use HR\Student;
class Payment_History{
    /**
     * run filter using student
     * @param Student $student studentobject
     * @return self $history Payment objects
     */
    public function filter(Student $student): self{
        return $this;
    }

    /**
     * get payment array
     * @return array history of payment object
     */
    public function getData(): array{
        $history=[];
        return $history;
    }
}