<?php
include ('Point2D.php');

class Point3D extends Point2D
{
   public $z;

   public function __construct()
   {
         $this->z = 0;
   }

   /**
    * @return int
    */
   public function getZ()
   {
      return $this->z;
   }

   /**
    * @param int $z
    */
   public function setZ($z)
   {
      $this->z = $z;
   }

   public function setXYZ($x, $y,$z)
   {
      $this->x = $x;
      $this->y = $y;
      $this->z = $z;

      $this->xyz = [
          'x' => $this->x,
          'y' => $this->y,
          'z' => $this->z
      ];

   }

   public function getXYZ()
   {
      return implode($this->xyz,',');
   }

   public function toString()
   {
      return "(".$this->getX().",".$this->getY().",".$this->getZ().")";
   }
}