<?php
class quadraticEquation
{
    private $a;
    private $b;
    private $c;
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function getDiscriminant()
    {
        return $this->b * $this->b - (4 * $this->a * $this->c);
    }

    public function getRoot1()
    {
        return (-$this->b + pow($this->getDiscriminant(), 0.5)) / (2 * $this->a);
    }

    public function getRoot2()
    {
        return (-$this->b - pow($this->getDiscriminant(), 0.5)) / (2 * $this->a);
    }
    function getRoot()
    {
        // die(var_dump($this->getDiscriminant()));
        $delta = $this->getDiscriminant();
        try {
            if ($delta < 0) {
                throw new Exception(" Phương trình vô nghiệm .");
            };
            if ($delta == 0) {
                echo "<br>Phương trình có 2 nghiệm kép :" . $this->getRoot1();
            } else {
                echo "<br>Phương trình có 2 nghiệm phân biệt :" . $this->getRoot1() . " và " . $this->getRoot2();
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
