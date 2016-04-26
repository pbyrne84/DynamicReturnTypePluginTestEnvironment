<?php
class DataProviderWithStaticFactory
{
	/**
	 * @return \FooEntity
	 */
	public function returnData()
	{
		return new FooEntity();
	}

	/**
	 * @return \DataProviderWithStaticFactory
	 */
	public static function getDataProvider()
	{
		return new self();
	}
}
