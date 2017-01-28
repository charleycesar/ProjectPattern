<?php

namespace Projeto\Html;

class Html
{
    public static function builder($method,$params){
	    $tag = (new Builder)
        ->params($params)
        ->call($method);
	    return $tag;
    }
    public function __call($method, $params)
    {
        return $this->builder($method,$params);
    }
}
