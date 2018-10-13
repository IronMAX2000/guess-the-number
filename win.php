<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('я Ванга');
$app->initLayout('Centered');
$number=$_GET['number'];
$header = $app->add(['Header','я же говорил что я ванга,у тебя всего '.$number.' братан','size'=>1]);
$button1 = $app->add(['Button','го по новой','big green']);
$button1->link(['index']);
