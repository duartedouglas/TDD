<?php
 namespace App;
 
class CalculadoraTest extends \PHPUnit_Framework_TestCase
{
	
	function testSoma()
	{
		$calc = new Calculadora();

		$this->assertEquals(4, $calc->soma(2, 2));
	}
}
