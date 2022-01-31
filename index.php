<?php 
require "vendor/autoload.php";

use Mori\Perimeter_circle;
use Mori\Child;

 

                        echo  PHP_EOL;
$page1 = new Perimeter_circle(3);
$page1->print_perimeter();
                        echo  PHP_EOL;
                        echo  PHP_EOL;
$child_obj = new Child(4);
                        echo  PHP_EOL;
$child_obj->print_perimeter();
                        echo  PHP_EOL;
$child_obj->comment();



?>