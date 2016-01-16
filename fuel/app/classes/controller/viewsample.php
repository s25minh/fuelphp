<?php

class Controller_ViewSample extends Controller
{
	public function action_index()
	{
		// ビューに渡す変数
		$data = array();

		$data['title'] = new Date();
		$data['content'] = '<p>Content</p>';

		// Viewオブジェクトを生成し返す
		return View::forge('test/test', $data);
	}
}
