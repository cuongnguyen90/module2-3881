<?php


class Point2D
{
   public $x;
   public $y;

   public function __construct()
   {
      $this->x = 0;
      $this->y = 0;
   }

   /**
    * @param mixed $x
    */
   public function setX($x)
   {
      $this->x = $x;
   }

   /**
    * @param mixed $y
    */
   public function setY($y)
   {
      $this->y = $y;
   }

   /**
    * @return mixed
    */
   public function getX()
   {
      return $this->x;
   }

   /**
    * @return mixed
    */
   public function getY()
   {
      return $this->y;
   }

   public function setXY($x,$y)
   {
      $this->xy = [
          "x"=>$this->x,
          "y"=>$this->y

      ];
   }

   public function getXY()
   {
      return implode($this->xy,",");
   }

   public function toString()
   {
      return "(".$this->getX().",".$this->getY().")";
   }
}