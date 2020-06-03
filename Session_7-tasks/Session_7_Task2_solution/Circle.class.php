<?php
require_once 'Shape.class.php';


class Circle extends Shape
{

    const SHAPE_TYPE = 3;

    protected $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;

        parent::__construct(null,null);
    }

    public function area()
    {
        $area = 3.14 * $this->radius * $this->radius;

        return $area ;
    }

    public function getFullDescription ()
    {
        $fullDescription = 'Circle<'.$this->getId().'>: '.$this->getName($this->name).' - '.$this->radius;


        return $fullDescription ;
    }

}