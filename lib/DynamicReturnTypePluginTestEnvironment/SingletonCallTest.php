<?php

namespace DynamicReturnTypePluginTestEnvironment;


use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCase;
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity;
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestSingleton;

class SingletonCallTest extends PhockitoTestCase{
    const CLASS_NAME = __CLASS__;


    public function test_getInstanceDocTypedSelf() {
        $testEntity = TestSingleton::getInstanceDocTypedSelf()
                ->getPhockito()
                ->mock( TestEntity::CLASS_NAME );

        $testEntity->getA();
    }


    public function test_getInstanceDocTypedClass() {
        $testEntity = TestSingleton::getInstanceDocTypedClass()
                ->getPhockito()
                ->mock( TestEntity::CLASS_NAME );

        $testEntity->getA();
    }


    public function test_getInstanceDocTypedThis() {
        $testEntity = TestSingleton::getInstanceDocTypedThis()
                ->getPhockito()
                ->mock( TestEntity::CLASS_NAME );

        $testEntity->getA();
    }



    public function test_getInstanceDocTypedStatic() {
        $testEntity = TestSingleton::getInstanceDocTypedStatic()
                ->getPhockito()
                ->mock( TestEntity::CLASS_NAME );

        $testEntity->getA();
    }


    public function test_getInstanceMaskWithVariable() {
        $testEntity = TestSingleton::getInstanceDocTypedClass()
                ->getRepository( 'TestEntity' );

        $testEntity->getA();
    }









}
 