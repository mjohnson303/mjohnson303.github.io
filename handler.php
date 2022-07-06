<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';
error_log('1');
use FormGuide\Handlx\FormHandler;

error_log('2');

$pp = new FormHandler(); 
error_log('3');

$validator = $pp->getValidator();
$validator->fields(['name','email'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();
$validator->field('comments')->maxLength(6000);
error_log('4');




//$pp->sendEmailTo('mbaseball1@gmail.com'); // ← Your email here
$email_from=field('email');
$visitor_email=field('email');
$headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";
mail('mbaseball1@gmail.com',field['name'],field('comments'),$headers);
error_log('5');

echo $pp->process($_POST);