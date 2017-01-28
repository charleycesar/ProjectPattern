<?php

namespace Projeto\Html\Tags;

class A extends Tag
{
	protected function validate()
	{
		if( $this->content === null ){
			throw new \Exception('Parametro obrigatorio');
		}
	}

	protected function create()
	{
		$content = $this->content;
		$href = $this->attributes;
		return "<a href=\"{$href}\" {$this->attributes}>{$content}</a>";	}
}
