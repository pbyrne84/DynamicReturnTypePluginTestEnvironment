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

	/**
	 * @param \FooX[] $data
	 */
	public function processTwice(array $data)
	{
		$filteredData = Arr::filterArray($data, function (FooX $fooValue) {
			return true;
		});
		$filteredData[0]->boo(); // works fine

		$oneValue = Arr::getValueByCallback($filteredData, function (FooX $fooValue) {
			return true;
		});

		$oneValue->boo(); // autocompletion does not work
	}
}

class Arr
{
	public static function getFirst(array $a)
	{
		return $a[0];
	}

	public static function filterArray(array $a, callable $callback)
	{
		return array_filter($a, $callback);
	}

	public static function getValueByCallback(array $a, callable $callback)
	{
		foreach ($a as $item) {
			if ($callback($item) === true) {
				return $item;
			}
		}
	}
}
