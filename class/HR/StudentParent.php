<?php
declare(strict_types = 1);
namespace HR;

class StudentParent extends Human{

    protected string $occupation="";
    protected float $salary=0.00;
    public function __construct(string $name){
        $this->setName($name);
    }
    public function setOccupation(string $val){
        $this->occupation = $val;
    }
    public function getOccupation():string{
        return $this->occupation ;
    }
    public function validate():bool{
        if($this->name ==""){
            return false;
        }
        if($this->occupation ==""){
            return false;
        }
        
        return true;
    }

    
}