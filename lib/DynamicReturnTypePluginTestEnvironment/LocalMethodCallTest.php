<?php

namespace DynamicReturnTypePluginTestEnvironment;


use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\Phockito;
use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCase;
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity;

class LocalMethodCallTest extends PhockitoTestCase {
    const CLASS_NAME = __CLASS__;

    /** @var Phockito */
    private $localPhockitoInstance;


    public function __construct() {
        $this->localPhockitoInstance = new Phockito();
    }


    public function test_parentMethod_classConstant() {
        $testEntity = $this->localGetFullMock( TestEntity::CLASS_NAME );
        $testEntity->getA();

        $this
                ->localGetFullMock( $testEntity )
                ->getA();
    }


    private function localGetFullMock( $class ) {

    }


    public function test_parentMethod_string() {
        $testEntity = $this->localGetFullMock( '\DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity' );
        $testEntity->getA();

        $this
                ->localGetFullMock( $testEntity )
                ->getA();
    }


    public function test_parentMethod_instance() {
        $originalInstance = new TestEntity( 'a', 'b', 'c' );
        $testEntity       = $this->localGetFullMock( $originalInstance );
        $testEntity->getA();

        $this
                ->localGetFullMock( $testEntity )
                ->getA();
    }

}
