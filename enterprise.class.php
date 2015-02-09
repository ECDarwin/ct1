<?php

class Enterprise
{
	public function test()
	{
		echo __METHOD__;
	}

	public function __construct()
	{
		echo 'change in hotfix branch';
	}
}