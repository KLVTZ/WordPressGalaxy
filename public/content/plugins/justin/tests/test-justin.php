<?php

class JustinTest extends WP_UnitTestCase {
	public function setUp()
	{
		$this->justin = new JustinAttribution;
	}

	public function testAddedJustin()
	{
		$newString = $this->justin->add("Hi.");
		$this->assertEquals($newString, 
			"Hi. <span style='font-size: 50%'>-Justin Page</span>");
	}
}

