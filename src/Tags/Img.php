<?php

namespace Projeto\Html\Tags;

class Img extends Tag
{
	protected function validate()
	{
		if( $this->content === null ){
			throw new \Exception('Parametro obrigatorio');
		}
	}

	protected function create()
	{
		$src = $this->src;
		return "<img src=\"{$src}\">";
	}
}
