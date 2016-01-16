<?php

/**
 * Person class Tests
 *
 * @group App
 */
class person_Test extends TestCase
{
	public function test_gender()
	{
		$person = new Person('Rintaro', 'male', '1991/12/12');

		$test = $person->get_gender();
		$expected = 'male';

		$this->assertEquals($expected, $test);
	}
}
