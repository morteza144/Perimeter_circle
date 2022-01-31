<?php 
namespace Mori;

class Perimeter_circle {
    public $perimeter;
    public function __construct($r){
        $this->perimeter=$r*$r*3.14;
    }
    public function print_perimeter(){
        echo 'the perimeter is:  '.$this->perimeter;
    }
}



 ?>