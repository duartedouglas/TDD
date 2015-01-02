<?php
 namespace AppTest;
 
 use App\Calculadora;

class CalculadoraTest extends \PHPUnit_Framework_TestCase
{


   public function setUp()
   {
       $this->calculadora = new Calculadora;
   }

	public function getNumeros()
	{
		return [
		    [2, 2, 4],
		    [2.5, 2.5, 5],
		    [5, 5, 10],
		    [-4, -4, -8]
		];
	}


	/**
	 * @dataProvider getNumeros
	 * @return [type]
	 */
	public function testSoma($a, $b ,$soma)
	{

		$this->assertEquals($soma, $this->calculadora->soma($a, $b));
	}

	/**
	* @expectedException InvalidArgumentException
	* @return [type]
	*/
    public function testSomaThrowsInvalidArgumentException()
    {

	    $this->calculadora->soma('a', []);
    }

}
