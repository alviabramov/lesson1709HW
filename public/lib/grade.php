<?php
require 'lib/student.php';
namespace lib;
class Grade
{
  public $stude1;
  public $stude2;
}

$grade1 = new Grade;
$grade1->stude1 = new Student;
$grade1->stude1->addStude("Alex");
$grade1->stude2 = new Student;
$grade1->stude2->addStude("Andrew");

$grade2 = new Grade;
$grade2->stude1 = new Student;
$grade2->stude1->addStude("Serg");
$grade2->stude2 = new Student;
$grade2->stude2->addStude("Ivan");

?>