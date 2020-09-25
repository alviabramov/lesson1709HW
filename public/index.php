<?php
require 'lib/Student.php';
require 'lib/Grade.php';
require 'lib/School.php';

$grade1 = new lib\Grade;
$grade1->stude1 = new lib\Student;
$grade1->stude1->addStude("Alex");
$grade1->stude2 = new lib\Student;
$grade1->stude2->addStude("Andrew");

$grade2 = new lib\Grade;
$grade2->stude1 = new lib\Student;
$grade2->stude1->addStude("Serg");
$grade2->stude2 = new lib\Student;
$grade2->stude2->addStude("Ivan");

$school = new lib\School;
$school->gradeSchool1=$grade1;
$school->gradeSchool2=$grade2;

print_r($school);

?>

