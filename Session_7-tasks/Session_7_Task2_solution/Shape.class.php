<?php


class Shape
{

    const SHAPE_TYPE = 1;

    public $name;

    protected $length;

    protected $width;

    private $id;



    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
        $this->id = uniqid();
    }


    public function getName(): string
    {

        if ($this->name){
        return $this->name;
        }
        return 'Shape';
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getId(): string
    {
        return $this->id;
    }


    public function area()
    {
        $area = $this->length * $this->width ;

        return $area ;
    }


    public static function getTypeDescription ()
    {
        return 'Type: '.static::SHAPE_TYPE;
    }


    public function getFullDescription ()
    {
        $fullDescription = 'Shape<'.$this->getId().'>: '.$this->getName($this->name).' - '.$this->length.' x '.$this->width;


        return $fullDescription ;
    }
}