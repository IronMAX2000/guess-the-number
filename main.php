<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('я Ванга');
$app->initLayout('Centered');
$min=$_GET['min'];
$max=$_GET['max'];
$number=($min+$max)/2;
$number=round($number);
$header = $app->add(['Header','стока семок '.$number.'?','size'=>1]);
$button1 = $app->add(['Button','как ты угадал???','big green']);
$button1->link(['win','number'=>$number]);

$button1 = $app->add(['Button','не,оно больше','big green']);
$button1->link(['main','min'=>$number,'max'=>$max]);

$button1 = $app->add(['Button','не,оно меньше','big green']);
$button1->link(['main','min'=>$min,'max'=>$number]);

$button1 = $app->add(['Button','го по новой','big green']);
$button1->link(['index']);
