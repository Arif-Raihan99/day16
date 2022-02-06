<?php
namespace App\classes;

use mysql_xdevapi\BaseResult;

class Example
{
    public $firstNumber = 10;
    public $firstName = 'Arif';
    public $lastName = 'Raihan';

    public function index(){
        echo "Arif Raihan <br>";
        echo $this->firstNumber;
        echo '<br/>';
        echo $this->firstName;
        echo '<br/>';
        echo $this->lastName;
        echo '<br/>';
        echo $this->firstName.$this->lastName;
    }
}