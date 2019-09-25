<?php 

namespace src\classes;

class Division implements OparationInterface{
    function run($number,$result){
        return $result / $number;
    }
}
