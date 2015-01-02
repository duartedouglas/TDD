<?php
 namespace AppTest;
 
 use App\Calculadora;

class CalculadoraTest extends \PHPUnit_Framework_TestCase
{

	public function getNumeros()
	{
		return [
		    [2, 2, 4],
		    [2.5, 2.5, 5]
		];
	}
	/**
	 * @dataProvider getNumeros
	 * @return [type]
	 */
	public function testSoma($a, $b ,$soma)
	{
		$calc = new Calculadora();

		$this->assertEquals($soma, $calc->soma($a, $b));
		$this->assertEquals(4.9, $calc->soma(2.5, 2.4));
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
