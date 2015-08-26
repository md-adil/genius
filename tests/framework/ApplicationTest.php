<?php
use Genius\Framework\Application;
/**
* 
*/
class ApplicationTest extends PHPUnit_Framework_TestCase
{
	public function testRunner() {
		$app = new Application;
		$this->assertEquals('this is running', $app->runner());
		// $app->runner();
	}
}