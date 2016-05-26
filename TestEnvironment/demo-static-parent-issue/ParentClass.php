<?php
class ParentClass
{

	/**
	* @param object $entity
	* @return object
	*/
	public static function refreshEntity($entity)
	{
		return $entity;
	}

	/**
	* @param object $entity
	* @return object
	*/
	public static function refreshEntityWithoutCallback($entity)
	{
		return $entity;
	}
}
