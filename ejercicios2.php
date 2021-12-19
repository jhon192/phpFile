<?php

// php switch example

// $fruit = "no";

// function Fruit($fruit){
//     echo "this fruit is $fruit";
// }

// switch ($fruit) {
//     case 'apple':
//         Fruit($fruit);
//         break;

//     case "pear":
//         Fruit($fruit);
//         break;

//     default:
//         echo "not available fruit";
//         break;
// }

class People
{
    public $name;
    public $age;
    public $status;

    function __construct($name, $age, $status)
    {
        $this->name = $name;
        $this->age = $age;
        $this->status = $status;
    }

    public function returnName()
    {
        echo "my name is $this->name \n im $this->age years old\nand im $this->status";
    }
}

$p1 = new People("jhon", 19, "single");

$p1->returnName();