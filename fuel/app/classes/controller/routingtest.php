<?php

class Controller_RoutingTest extends Controller
{
	public function router($resource, $arguments)
	{
		Debug::dump($this->request->route);
		Debug::dump($this->params());
	}
}
