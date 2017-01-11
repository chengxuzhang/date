<?php

namespace zhang\date;

use Yii;

class Date
{
    public function run(){
        $content = file_get_contents('index.html');
        echo $content;
    }
}
