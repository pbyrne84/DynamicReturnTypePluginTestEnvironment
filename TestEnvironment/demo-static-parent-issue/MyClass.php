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

	public function loadStaticProperty()
	{
		$user = StaticPropertyDataProvider::$user->getAccessToken();

		$refreshedAccessToken = self::refreshEntity($user);
		$refreshedAccessToken->isValid(); // auto-complete does not work for this
	}
}

class FooEntity
{

	public function entityMethod()
	{

	}
}
