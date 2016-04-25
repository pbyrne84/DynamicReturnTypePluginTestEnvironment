<?php

class FooX
{

	public function boo()
	{

	}
}

class Processor
{

	/** @var \DataProvider */
	private $dataProvider;

	public function __construct(DataProvider $dataProvider)
	{
		$this->dataProvider = $dataProvider;
	}

	public function processData()
	{
		$data = $this->dataProvider->returnData();
		$out = Arr::getFirst($data);
		$out->boo(); // does not work unless I copy the DataProvider class into this file
	}

}

class Arr
{
	public static function getFirst(array $a)
	{
		return $a[0];
	}
}
