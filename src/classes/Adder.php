<?php 
namespace src\classes;



class Adder implements OparationInterface{
    function run($number,$result){     
        return $number + $result;
    }
}