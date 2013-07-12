<?php

namespace DynamicReturnTypePluginTestEnvironment;



use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCase;
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity;

class VariableMethodCallTest extends PhockitoTestCase {
    const CLASS_NAME = __CLASS__;


    public function __construct() {
    }


    public function test_parentMethod_classConstant() {
        $phockitoTestCase = new VariableMethodCallTest();
        $maxValueSet = $phockitoTestCase->mock( TestEntity::CLASS_NAME  );
        $maxValueSet->getA();

        $phockitoTestCase
                ->verify( $maxValueSet )->getA();
    }


    public function test_parentMethod_string() {
        $phockitoTestCase = new VariableMethodCallTest();
        $maxValueSet = $phockitoTestCase->mock( '\DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity');
        $maxValueSet->getA();

        $phockitoTestCase
                ->verify( $maxValueSet )
                ->getA();
    }


    public function test_parentMethod_instance() {
        $phockitoTestCase = new VariableMethodCallTest();
        $class       = new TestEntity( 'a', 'b', 'c');
        $maxValueSet = $phockitoTestCase->mock( $class );
        $maxValueSet->getA();

        $phockitoTestCase
                ->verify( $maxValueSet )
                ->getA();
    }

}
