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
        $testEntity      = $phockitoTestCase->mock( TestEntity::CLASS_NAME );
        $testEntity->getA();

        $phockitoTestCase
                ->verify( $testEntity )
                ->getA();

        $this->passAsTypeHint( $testEntity );
    }


    public function test_parentMethod_nativeClassConstant() {
        $phockitoTestCase = new VariableMethodCallTest();
        $testEntity      = $phockitoTestCase->mock( TestEntity::class );
        $testEntity->getA();

        $phockitoTestCase
                ->verify( $testEntity )
                ->getA();

        $this->passAsTypeHint( $testEntity );
    }




    private function passAsTypeHint( TestEntity $testEntity ) {

    }



    public function test_parentMethod_string() {
        $phockitoTestCase = new VariableMethodCallTest();
        $testEntity      = $phockitoTestCase->mock( '\DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity' );
        $testEntity->getA();

        $phockitoTestCase
                ->verify( $testEntity )
                ->getA();

        $this->passAsTypeHint( $testEntity );
    }


    public function test_parentMethod_instance() {
        $phockitoTestCase = new VariableMethodCallTest();
        $class            = new TestEntity( 'a', 'b', 'c' );
        $testEntity      = $phockitoTestCase->mock( $class );
        $testEntity->getA();

        $phockitoTestCase
                ->verify( $testEntity )
                ->getA();

        $this->passAsTypeHint( $testEntity );

    }

}