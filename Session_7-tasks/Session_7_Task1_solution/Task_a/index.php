<?php

class sortaArray
{
   protected $sort;

   public function __construct(array $sort)
   {
      $this->sort = $sort;
   }


   public function sortFunc()
   {
      $sortedArray = $this->sort;
      sort($sortedArray);
      return $sortedArray;
   }
}
$sortArray = new sortaArray(array(11, -2, 4, 35, 0, 8, -9));


print_r($sortArray->sortFunc()) . "<br> <br>";
