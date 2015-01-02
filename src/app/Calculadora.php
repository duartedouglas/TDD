<?php

namespace App;

class Calculadora
{
	public function soma($a, $b)
	{
		if ( ! is_int($a) or ! is_int($b) ) {
			throw new \InvalidArgumentException("Error Processing Request", 1);
			
		}
		return $a + $b;
	}

}