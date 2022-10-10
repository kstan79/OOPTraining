<?php
declare(strict_types = 1);
namespace HR;

abstract class Human implements HumanInterface{
    protected string $name="";
    protected string $gender="";


    public function getName():string{
        return $this->name;
    }
    public function setName(string $name){
        $this->name=$name;
    }
    public function __set($name, $value) {
        if($name=="duplicate"){
            //dosomething
        }
        throw new \Exception('Cant set!');
    }

    /**
     * save records, after validation
     * @return bool true = success
     */
    public function Save():bool{
        if($this->validate()){
            return true;
        }else{
            return false;
        }
        
    }
}