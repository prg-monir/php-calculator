<?php 
namespace src\classes;
class Calculator{

    protected $result;
    protected $oparation;

    function setOparation( OparationInterface $oparation){

        $this->oparation = $oparation;
    }

    function calculate(){

        foreach( func_get_args() as $arg){
           $this->result =  $this->oparation->run($arg,$this->result);
        }
    }

    function showResult(){
        return "The result is ".$this->result;
    }


}