<?php 

namespace src\classes;

class Division implements OparationInterface{
    function run($number,$result){
        
        return  $number==0? 0: $result / $number;
    }
}
