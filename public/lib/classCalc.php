<?php
class Calc
{
   public $x;
   public $y;
   public function Calculate (Operation $oper)
   {
   return $oper->calc($this->x,$this->y);
   }
}