<?php

namespace DynamicReturnTypePluginTestEnvironment;


use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\Phockito;
use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCase;
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity;
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestInterface;

class LocalMethodCallTest extends PhockitoTestCase
{
    const CLASS_NAME = __CLASS__;

    /** @var Phockito */
    private $localPhockitoInstance;


    public function __construct()
    {
        $this->localPhockitoInstance = new Phockito();
    }


    public function test_localMethodCallCreatesInstanceThenChainedChildCall() {
        //signature	#Ђ#M#Ђ#M#C\DynamicReturnTypePluginTestEnvironment\LocalMethodCallTest:localGetFullMockªDynamicReturnTypePluginTestEnvironment\LocalMethodCallTest:localGetFullMockªDynamicReturnTypePluginTestEnvironment\LocalMethodCallTest
        $testFactory1 = $this->localGetFullMock( 'DynamicReturnTypePluginTestEnvironment\LocalMethodCallTest' );

        $testFactory2 = $testFactory1->localGetFullMock( 'DynamicReturnTypePluginTestEnvironment\LocalMethodCallTest' );

        $testFactory2->test_parentMethod_classConstant();
    }


    public function test_parentMethod_classConstant()
    {
        $testEntity = $this->localGetFullMock(TestEntity::CLASS_NAME);
        $testEntity->getA();
        $testEntity->getThis()->getA();

        $this
            ->localGetFullMock($testEntity)
            ->getA();

        $this->passClassAsTypeHint($testEntity);
    }


    public function test_parentMethod_classStringConstant()
    {
        $testEntity = $this->localGetFullMock('\DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity');
        $testEntity->getA();
        $getThis = $testEntity->getThis();
        $getThis->getThis();

        $this
            ->localGetFullMock($testEntity)
            ->getA();

        $this->passClassAsTypeHint($testEntity);
    }


    public function test_parentMethod_nativeClassConstant()
    {
        $testEntity = $this->localGetFullMock(TestEntity::class);
        $testEntity->getA();
        $getThis = $testEntity->getThis();
        $getThis->getA();


        $this
            ->localGetFullMock($testEntity)
            ->getA();

        $this->passClassAsTypeHint($testEntity);
    }

    public function test_parentMethod_nativeIntefaceConstant()
    {
        $testEntity = $this->localGetFullMock(TestInterface::class);
        $testEntity->getThis();
        $getThis = $testEntity->getThis();
        $getThis->getThis();


        $this
            ->localGetFullMock($testEntity)
            ->getThis();

        $this->passInterfaceAsTypeHint($testEntity);
    }


    public function test_parentMethod_customIntefaceConstant()
    {
        $testEntity = $this->localGetFullMock(TestInterface::INTERFACE_NAME);
        $testEntity->getThis();
        $getThis = $testEntity->getThis();
        $getThis->getThis();


        $this
            ->localGetFullMock($testEntity)
            ->getThis();

        $this->passInterfaceAsTypeHint($testEntity);
    }





    private function localGetFullMock($class)
    {

    }


    private function passClassAsTypeHint(TestEntity $testEntity)
    {

    }

    private function passInterfaceAsTypeHint(TestInterface $testEntity)
    {

    }


    public function test_parentMethod_string()
    {
        $testEntity = $this->localGetFullMock('\DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity');
        $testEntity->getA();
        $getThis = $testEntity->getThis();
        $getThis->getThis();

        $this
            ->localGetFullMock($testEntity)
            ->getA();

        $this->passClassAsTypeHint($testEntity);
    }


    public function test_parentMethod_instance()
    {
        $originalInstance = new TestEntity('a', 'b', 'c');
        $testEntity = $this->localGetFullMock($originalInstance);
        $testEntity->getA();
        $getThis = $testEntity->getThis();
        $getThis->getThis();

        $this
            ->localGetFullMock($testEntity)
            ->getA();

        $this->passClassAsTypeHint($testEntity);
    }

}
