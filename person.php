<?php

class Person
{
	// プロパティ
	public $name;
	private $gender;
	private $birthdate;

	// コンストラクタ
	public function __construct($name, $gender, $birthdate)
	{
		$this->name = $name;
		$this->gender = $gender;
		$this->birthdate = $birthdate;
	}

	// 性別を取得するメソッド
	public function get_gender()
	{
		return $this->gender;
	}
}
