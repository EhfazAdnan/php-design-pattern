<?php
spl_autoload_register(function($class_name){
   include "classes/".$class_name.".php";
});

$user = new User();
$msgSendFromUserObj = $user->getMsg();

switch ($msgSendFromUserObj) {

      case 'mail':
         echo 'mail selected, create sendMail Obj and do the operation';
         $obj = new SendEmail();
         $obj->notification();
         break;

      case 'sms':
         echo 'sms selected, create sendSms Obj and do the operation';
         $obj = new SendSms();
         $obj->notification();
         break;
   
   default:
      echo "No msg sending option seleted";
      break;
}



?>