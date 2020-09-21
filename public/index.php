<?php
require 'myClass.php';
require 'lib/myClass.php';


//=============================================

//include;
//require;
//include_once;
//require_once;

//==============================================
//interface  Oper
//{
//    public function calc ($x,$y);
//}
//class Summ implements Oper
//{
//    public function calc($x,$y)
//    {
//        return $x +$y;
//    }
//}
//class Multi implements Oper
//{
//    public function calc($x, $y)
//    {
//        return $x*$y;
//    }
//}
//class Calc
//{
//    public $x;
//    public $y;
//    public function Calculate (Oper $oper)
//    {
//    return $oper->calc($this->x,$this->y);
//    }
//}
//$calc = new Calc();
//$calc -> x = 10;
//$calc -> y = 20;
//$summ = new Summ();
//echo $calc->Calculate ($summ);
//====================================
//abstract class A
//{
//    public $prop = 10;
//    public function Func()
//    {
//        return $this->prop;
//    }
//    abstract function getN();
//}
//
//class B extends A
//{
//    public $prop2 = 20;
//    public function Func2 ()
//    {
//        return $this->prop2;
//    }
//
//    function getN()
//    {
//        // TODO: Implement getN() method.
//    }
//
//}
//$ObjA = new A();
//$ObjB = new B();
//print_r($ObjA);
//print_r($ObjB);
//echo $ObjB->Func();
//echo '<br>';
//echo $ObjB->Func2();



//=================================
//class A
//{
//    public $prop = 10;
//    public function Func()
//    {
//        return $this->prop;
//    }
//}
//
//class B extends A
//{
//    public $prop2 = 20;
//    public function Func2 ()
//    {
//        return $this->prop2;
//    }
//}
//$ObjA = new A();
//$ObjB = new B();
//print_r($ObjA);
//print_r($ObjB);
//echo $ObjB->Func();
//echo '<br>';
//echo $ObjB->Func2();
//=========================================
//class MyClass {
//    static public $prop;
//    static function Func () {
//        return self::$prop;
//    }
//}
//MyClass::$prop = 5;
//echo MyClass::Func();

//========================================
//    const PI = 3.141651;
//    public function Func (){
//        echo self::PI;
//    }
//
//}
//$o = new MyClass();
//$o->Func();
////echo MyClass::PI;

//=========================================
//    private $prop = 5;
//    public function Func(){
//        return $this->pFunc();
//    }
//    private function pFunc (){
//        return $this->prop;
//    }
////   public $prop=10;
////   public function Func (){
////       return $this->prop;
////   }
//}
//
//$obj = new MyClass();
////$obj->prop =5;
////echo $obj->prop;
//echo $obj->Func();
//echo $obj->pFunc();

?>

