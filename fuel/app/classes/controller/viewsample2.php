<?php

class Controller_ViewSample2 extends Controller
{
	public function action_index()
	{
		$view = View::forge('test/test');

		$view->set('title', 'ビューのサンプル２');
		$view->set_safe('content', '<h1>Content</h1>');

		return $view;
	}
}
