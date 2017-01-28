<?php
    include "vendor/autoload.php";

    $html = new Projeto\Html\Html;
    $img = $html->img('logo.png');
    echo $html->a($img,'Meu Site','https://charleycesar.github.io',['class'=>'btn btn-primary']);
