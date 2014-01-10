<?php
namespace DynamicReturnTypePluginTestEnvironment;

use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCase;
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity;

class FunctionCallTest extends PhockitoTestCase {
    const CLASS_NAME = __CLASS__;


    public function test_namesSpacedFunctionCall_classConstant() {
        $testEntity = \DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\mock( TestEntity::CLASS_NAME );
        $testEntity->getA();

        verify( $testEntity )->getA();
        $this->passAsTypeHint( $testEntity );
    }

    public function test_namesSpacedFunctionCall_classStringConstant() {
        $testEntity = \DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\mock( TestEntity::CLASS_NAME_AS_STRING );
        $testEntity->getA();

        verify( $testEntity )->getA();
        $this->passAsTypeHint( $testEntity );
    }




    private function passAsTypeHint( TestEntity $testEntity ) {

    }


    public function test_namesSpacedFunctionCall_nativeClassConstant() {
        $testEntity = \DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\mock( TestEntity::class );
        $testEntity->getA();

        verify( $testEntity )->getA();
        $this->passAsTypeHint( $testEntity );
    }




    public function test_namesSpacedFunctionCall_string() {
        $testEntity = \DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\mock(
                '\DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity'
        );

        verify( $testEntity )->getA();
        $this->passAsTypeHint( $testEntity );

    }


    public function test_namesSpacedFunctionCall_instance() {
        $testEntity = \DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\mock(
                new TestEntity( 'a', 'b', 'c' )
        );

        verify( $testEntity )->getA();
        $this->passAsTypeHint( $testEntity );

    }


}
