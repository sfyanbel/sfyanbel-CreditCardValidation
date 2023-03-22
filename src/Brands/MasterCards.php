<?php


namespace sfyanbel\CreditCardValidation\Brands;

/*
|--------------------------------------------------------------------------
| Master Card Credit Card
|--------------------------------------------------------------------------
| This Class Contain First Number of the Master Card store in Var $FNumber
| 
| $info array Conatin name of the Card and Id  
| 
| This array is the final Exporter that the Developer will get , you can modify it as you like
|
| (validationLenght) Function will return True if the lenght of Card Correct & false for incorrect lenght
*/

class MasterCards
{
  
    static $info=['MasterCards',3];

 
   static function  validationLenght($Lenght){
    return $Lenght==16 ? true : false;
   }

   private static $instance;

   public static function getInstance()
   {
       if (!self::$instance) {
           self::$instance = new self();
       }

       return self::$instance;
   }
}



 
?>