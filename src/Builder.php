<?php

namespace Projeto\Html;

class Builder
{
	public function attribute(array $attr = null)
	{
		$this->params = new Attributes($params);
	}

	public function call($method)
    {
        $class = "Projeto\Html\Tags\\".ucfirst($method);
        return call_user_func_array([new $class,'get'],$this->params);
    }
}
