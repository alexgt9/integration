<?php

namespace alexgt9;

class FailingTest extends \PHPUnit_Framework_TestCase
{
	public function testFail(){
		$this->assertTrue( false );
	}
}
