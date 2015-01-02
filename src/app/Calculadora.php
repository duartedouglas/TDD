<?php

namespace App;

class Calculadora
{
	public function soma($a, $b)
	{
		if ( ! is_numeric($a) or ! is_numeric($b) ) {
			throw new \InvalidArgumentException("Error Processing Request", 1);
			
		}
		return $a + $b;
	}

}