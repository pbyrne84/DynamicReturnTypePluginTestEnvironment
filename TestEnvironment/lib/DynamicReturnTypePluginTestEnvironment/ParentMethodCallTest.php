<?php

namespace DynamicReturnTypePluginTestEnvironment;


use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\Phockito;
use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCase;
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity;

class ParentMethodCallTest extends PhockitoTestCase {
    const CLASS_NAME = __CLASS__;

    public function test_parentMethod_classConstant() {
        $testEntity = $this->mock( TestEntity::CLASS_NAME );
        $testEntity->getA();

        $this
                ->verify( $testEntity )
                ->getA();

        $this->passAsTypeHint( $testEntity );
    }


    public function test_parentMethod_classStringConstant() {
        $testEntity = $this->mock( TestEntity::CLASS_NAME_AS_STRING );
        $testEntity->getA();

        $this
                ->verify( $testEntity )
                ->getA();

        $this->passAsTypeHint( $testEntity );
    }


    public function test_localMethodCallCreatesInstanceThenChainedChildCall() {
        $testFactory1 = $this->mock( 'DynamicReturnTypePluginTestEnvironment\LocalMethodCallTest' );
        $testFactory2 = $testFactory1->mock( 'DynamicReturnTypePluginTestEnvironment\LocalMethodCallTest' );
        $testFactory2->test_parentMethod_classConstant();
    }

    private function passAsTypeHint( TestEntity $testEntity ) {

    }


    public function test_parentMethod_nativeClassConstant() {
        $testEntity = $this->mock( TestEntity::class );
        $testEntity->getA();

        $this
                ->verify( $testEntity )
                ->getA();

        $this->passAsTypeHint( $testEntity );
    }


    public function test_parentMethod_string() {
        $testEntity = $this->mock( '\DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity' );
        $testEntity->getA();

        $this
                ->verify( $testEntity ) 
                ->getA();

        $this->passAsTypeHint( $testEntity );
    }


    public function test_parentMethod_instance() {
        $testEntity = $this->mock( new TestEntity( 'a', 'b', 'c' ) );
        $testEntity->getA();

        $this
                ->verify( $testEntity )
                ->getA();

        $this->passAsTypeHint( $testEntity );
    }

}
