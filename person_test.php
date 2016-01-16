<?php

require __DIR__ . '/person.php';

class Person_Test extends PHPUnit_Framework_TestCase
{
	public function test_gender()
	{
		$person = new Person('Rintaro', 'female', '1992/12/13');

		$test = $person->get_gender();
		$expected = 'male';

		$this->assertEquals($expected, $test);
	}
}
