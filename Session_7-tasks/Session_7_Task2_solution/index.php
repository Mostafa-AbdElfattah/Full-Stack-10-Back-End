<?php

require_once 'Shape.class.php';
require_once 'Rectangle.class.php';
require_once 'Circle.class.php';


//////////////////////////////////////////////////////////////////////////////

echo "<h1>".Shape::getTypeDescription ()."</h1>";


$shape = new Shape(5,6) ;

echo "<h1>Name: ".$shape->getName()."</h1>";

echo "<h1>ID: ".$shape->getId()."</h1>";

echo "<h1>Area: ".$shape->area()."</h1>";

echo "<h1>Full Description: ".$shape->getFullDescription()."</h1>";

echo "<hr>";

///////////////////////////////////////////////////////////////////////////////

echo "<h1>".Rectangle::getTypeDescription ()."</h1>";


$rectangle = new Rectangle(7,8);

$rectangle ->name = 'Rectangle';

echo "<h1>Name: ".$rectangle->getName()."</h1>";

echo "<h1>ID: ".$rectangle->getId()."</h1>";

echo "<h1>Area: ".$rectangle->area()."</h1>";

echo "<h1>Full Description: ".$rectangle->getFullDescription()."</h1>";

echo "<hr>";

///////////////////////////////////////////////////////////////////////////////

echo "<h1>".Circle::getTypeDescription ()."</h1>";


$circle = new Circle(5);

$circle->name = 'Circle';

echo "<h1>Name: ".$circle->getName()."</h1>";

echo "<h1>ID: ".$circle->getId()."</h1>";

echo "<h1>Area: ".$circle->area()."</h1>";

echo "<h1>Full Description: ".$circle->getFullDescription()."</h1>";

echo "<hr>";

///////////////////////////////////////////////////////////////////////////////





















