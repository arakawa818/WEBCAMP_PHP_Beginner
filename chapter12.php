<?php
/*「クラス」とは簡単に書くと
「 "複数の変数"と"複数の関数"のひとまとまり」です*/
//問1
class MyTest
{
    public function add($i, $j)
    {
        return $i + $j;
    }

    public function sub($i, $j)
    {
        return $i - $j;
    }
}

//問2
class MyTest2
{
    private $price;
    private $name;

    //
    public function setPrice($i)
    {
        $this->price = $i;
    }
    public function getPrice()
    {
        return $this->price;
    }

    //
    public function setName($s)
    {
        $this->name = $s;
    }
    public function getName()
    {
        return $this->name;
    }
}