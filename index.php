<?php
//include ('Point2D.php');
include ('Point3D.php');

$point2d = new Point2D();
$point2d->setXY(4,5);
echo $point2d->toString();
echo "<br>";
$point3d = new Point3D();
$point3d->setXYZ(4,5,6);
echo $point3d->toString();