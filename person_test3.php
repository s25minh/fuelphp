<?php

require __DIR__ . '/person.php';

class Person_Test3 extends PHPUnit_Framework_TestCase
{
	/**
	 * @dataProvider provider_people
	 */
	public function test_gender($name, $gender, $birthdate)
	{
		$person = new Person($name, $gender, $birthdate);

		$test = $person->get_gender();
		$expected = $gender;

		$this->assertEquals($expected, $test);
	}

	public function provider_people()
	{
		return array(
			array('Rintaro', 'male',   '1991/12/24'),
			array('Mayuri',  'female', '1994/1/1'),
			array('Suzuha',  'female', '2014/9/17'),
		);
	}

}
