<?php

namespace alexgt9;

class TwitterTest extends \PHPUnit_Framework_TestCase
{
	public function testGetUserInfo(){
		$twitter = new Twitter;
		$this->assertThat($twitter->getUser( 'alexgt9' ), $this->isType(\PHPUnit_Framework_Constraint_IsType::TYPE_ARRAY));
	}
}
