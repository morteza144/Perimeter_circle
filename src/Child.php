<?php 
namespace Mori;
class Child extends Perimeter_circle{
    // public function __construct(){
    //     echo 'i am soo soo';    //here we rewrite parent constructor
    //     parent::__construct(8);
    // }
    public function comment(){
        print('i am comment method from child class');
    }
}
 ?>