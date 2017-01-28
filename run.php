<?php
    include "vendor/autoload.php";

    $html = new Projeto\Html\Html;

    $img = $html->img('logo.png',['class'=>'btn btn-primary']);
    echo $html->a($img, 'https://charleycesar.github.io', ['class'=>'btn btn-primary']);
