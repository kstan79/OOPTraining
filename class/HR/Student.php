<?php
declare(strict_types = 1);
namespace HR;

class Student extends Human{
    use Student_TraitPayment;
    protected string $student_id="";
    protected array $studentparent=[];

    public function __construct(string $name){
        $this->setName($name);
    }
    public function fetchStudentFromId(string $id):bool{
        $this->name = "Student ".$id;
        return true;
    }

    public function setParents(StudentParent ...$studentparent){
        foreach( $studentparent as $index=>$p){
            
            $this->studentparent[]=$p;
        }
    }
    public function getParents():array{
        return $this->studentparent;
    }

    public function validate():bool{
        if($this->student_id ==""){
            return false;
        }
        if($this->name ==""){
            return false;
        }
        return true;
    }
}