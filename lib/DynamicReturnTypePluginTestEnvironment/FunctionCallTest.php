<?php
namespace DynamicReturnTypePluginTestEnvironment;

use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCase;
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity;

class FunctionCallTest extends PhockitoTestCase {
    const CLASS_NAME = __CLASS__;


    public function test_namesSpacedFunctionCall_classConstant() {
        $maxValueSet = \DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\mock( TestEntity::CLASS_NAME );
        $maxValueSet->getA();

        verify( $maxValueSet )->getA();
    }


    public function test_namesSpacedFunctionCall_string() {
        $maxValueSet = \DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\mock(
            '\DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity'
        );

        verify( $maxValueSet )->getA();
    }


    public function test_namesSpacedFunctionCall_instance() {
        $maxValueSet = \DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\mock(
            new TestEntity( 'a','b','c')
        );

        verify( $maxValueSet )->getA();
    }




}
