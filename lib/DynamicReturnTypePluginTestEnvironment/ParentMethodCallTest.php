<?php

namespace DynamicReturnTypePluginTestEnvironment;


use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\Phockito;
use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCase;
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity;

class ParentMethodCallTest extends PhockitoTestCase {
    const CLASS_NAME = __CLASS__;

    /** @var Phockito */
    private $localPhockitoInstance;


    public function __construct() {
        $this->localPhockitoInstance = new  Phockito();
    }


    public function test_parentMethod_classConstant() {
        $testEntity = $this->mock( TestEntity::CLASS_NAME );
        $testEntity->getA();

        $this
                ->verify( $testEntity )
                ->getA();

        $this->passAsTypeHint( $testEntity );
    }


    private function passAsTypeHint( TestEntity $testEntity ) {

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
