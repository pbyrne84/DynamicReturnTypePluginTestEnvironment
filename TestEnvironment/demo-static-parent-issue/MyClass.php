<?php
class MyClass extends ParentClass
{

	public function load()
	{
		$dataProvider = DataProviderWithStaticFactory::getDataProvider();
		$entity = $dataProvider->returnData();

		$refreshedEntity = self::refreshEntity($entity);
		$refreshedEntity->entityMethod(); // auto-complete does not work for this
	}
}

class FooEntity
{

	public function entityMethod()
	{

	}
}
