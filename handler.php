<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler(); 

$validator = $pp->getValidator();
$validator->fields(['email'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();

// echo $validator;
// $fh = fopen("temp.txt", 'a');
// fwrite($fh, $validator);
// fwrite($fh, "\r\n");
// fclose($fh);

$x = $_POST['email'];
// echo $x;
$fh = fopen("temp.txt", 'a');
fwrite($fh, $x);
fwrite($fh, "\r\n");
fclose($fh);
// $pp->sendEmailTo('someone@gmail.com'); // ← Your email here

echo $pp->process($_POST);
