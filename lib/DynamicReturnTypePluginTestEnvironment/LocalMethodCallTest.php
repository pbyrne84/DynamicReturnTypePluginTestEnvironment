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

        $this->passAsTypeHint( $testEntity );
    }


    public function test_parentMethod_classStringConstant() {
        $testEntity = $this->localGetFullMock( TestEntity::CLASS_NAME_AS_STRING );
        $testEntity->getA();

        $this
                ->localGetFullMock( $testEntity )
                ->getA();

        $this->passAsTypeHint( $testEntity );
    }




    public function test_parentMethod_nativeClassConstant() {
        $testEntity = $this->localGetFullMock( TestEntity::class );
        $testEntity->getA();

        $this
                ->localGetFullMock( $testEntity )
                ->getA();

        $this->passAsTypeHint( $testEntity );
    }



    private function localGetFullMock( $class ) {

    }


    private function passAsTypeHint( TestEntity $testEntity ){

    }


    public function test_parentMethod_string() {
        $testEntity = $this->localGetFullMock( '\DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity' );
        $testEntity->getA();

        $this
                ->localGetFullMock( $testEntity )
                ->getA();

        $this->passAsTypeHint( $testEntity );
    }


    public function test_parentMethod_instance() {
        $originalInstance = new TestEntity( 'a', 'b', 'c' );
        $testEntity       = $this->localGetFullMock( $originalInstance );
        $testEntity->getA();

        $this
                ->localGetFullMock( $testEntity )
                ->getA();

        $this->passAsTypeHint( $testEntity );
    }

}
