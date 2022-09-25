<?php
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;


$intro = new FieldsBuilder('intro');


$intro->setLocation('block', '==', 'acf/intro');


$intro

->addText('heading')

->addWysiwyg('text');


return $intro;

?>