<?php
declare(strict_types = 1);
require "vendor/autoload.php";

use HR\Student;
use HR\StudentParent;


$s1 = new Student("student1");
$p1 = new StudentParent("P1");
$p1->setOccupation("driver");
$p2 = new StudentParent("P2");
$p2->setOccupation("housewife");
$p3 = new StudentParent("P3");
$p3->setOccupation("teacher");

$s1->setParents($p1,$p2,$p3);
$plist = $s1->getParents();
echo sprintf("%s's parent: \n",$s1->getName());
foreach($plist as $index=>$p){
    
    echo sprintf("%s occupation: %s\n",$p->getName(),$p->getOccupation());

}
