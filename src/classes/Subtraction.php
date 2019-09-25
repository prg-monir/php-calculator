<?php 

namespace src\classes;

class Subtraction implements OparationInterface{
    function run($number,$result){
        return $result - $number;
    }
}