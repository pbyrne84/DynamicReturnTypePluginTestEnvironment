<?php

class DataProvider
{

	/**
	 * @return \FooX[]
	 */
	public function returnData()
	{
		return [
			new FooX(),
			new FooX(),
		];
	}

}
