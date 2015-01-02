<?php
 namespace AppTest;
 
 use App\Calculadora;

class CalculadoraTest extends \PHPUnit_Framework_TestCase
{
	
	public function testSoma()
	{
		$calc = new Calculadora();

		$this->assertEquals(4, $calc->soma(2, 2));
	}
	/**
	* @expectedException InvalidArgumentException
	*/
    public function testSomaThrowsInvalidArgumentException()
    {
    	$calc = new Calculadora();

	    $calc->soma('2', []);
    }

}
