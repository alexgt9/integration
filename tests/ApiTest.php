<?php

namespace alexgt9;

class GoogleTest extends \PHPUnit_Framework_TestCase
{
    public function testGetUserInfo()
    {
        $api = new Google;
        $this->assertThat($api->getStatus('alexgt9'), $this->equalTo('200'));
    }
}
