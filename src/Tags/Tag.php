<?php

namespace Projeto\Html\Tags;

abstract class Tag
{
	public function get(string $content, array $attributes = null)
	{
		$this->validate($attributes);
		return $this->create($content, $attributes);	
	}

	abstract protected function validate();

	abstract protected function create();
}
