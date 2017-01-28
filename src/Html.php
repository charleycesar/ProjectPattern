<?php
    
    namespace Projeto\Html;
    
    class Html {
        
        public function a($text,$href, array $attribute = null){
	    $attribute = $this->$attribute($attribute);
	    return "<a href='{$href}' {$attribute}>{$text}</a>";        
        }

	public function img($src, array $attribute = null){
	    return "<img src='{$src}' {$attribute}>";
	}

	public function attribute(array $attribute = null){
	    if( $attribute !== null ){
		foreach( $attribute as $k => $v ){
		    if( is_int($k) ){
		    	$data[] => $v;
		    }else{ 
		    	$data[] => $k. '="' .$v. '"';
		    }
		}
		$attribute = implode(' ',$data);
	    } 
	    return $attribute;
	}	
        
    }
