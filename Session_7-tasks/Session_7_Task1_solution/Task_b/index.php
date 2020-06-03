<?php
class MyCalculator
{
    private $val1, $val2;

    public function __construct($val1, $val2)
    {
        $this->val1 = $val1;
        $this->val2 = $val2;
    }
    public function add()
    {
        return $this->val1 + $this->val2;
    }
    public function sub()
    {
        return $this->val1 - $this->val2;
    }
    public function mult()
    {
        return $this->val1 * $this->val2;
    }
    public function divide()
    {
        return $this->val1 / $this->val2;
    }
}
$calc = new MyCalculator(21, 7);


echo "<h1>" . $calc->add() . "</h1>";
echo "<h1>" . $calc->mult() . "</h1>";
echo "<h1>" . $calc->sub() . "</h1>";
echo "<h1>" . $calc->divide() . "</h1>";
