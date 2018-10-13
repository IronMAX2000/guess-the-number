<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('я Ванга');
$app->initLayout('Centered');
$header = $app->add(['Header','Инструкция']);
$text = $app->add(['Text']);
$text->addParagraph('скока семок у тебя в кармане?');
$text->addParagraph('не бери больше ста семок за раз и не ходи без них вообще');
$button = $app->add(['Button','давай играть','teal large inverted','iconRight'=>'american sign language interpreting']);
   $button->link(['main','min'=>'0','max'=>'100']);
