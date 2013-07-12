<?php
namespace DynamicReturnTypePluginTestEnvironment;


use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\Phockito;
use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCase;
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity;

class FieldCallTest extends PhockitoTestCase {
    const CLASS_NAME = __CLASS__;

    /** @var Phockito */
    private $localPhockitoInstance;


    public function __construct() {
        $this->localPhockitoInstance = new Phockito();
    }


    public function test_localInstanceCall_classConstant() {
        $testEntity = $this->localPhockitoInstance->mock( TestEntity::CLASS_NAME );
        $testEntity->getA();

        $this->localPhockitoInstance
                ->verify( $testEntity )
                ->getA();
    }


    public function test_localInstanceCall_string() {
        $testEntity = $this->localPhockitoInstance->mock(
            '\DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity'
        );

        $testEntity->getA();
        $this->localPhockitoInstance
                ->verify( $testEntity )
                ->getA();

    }


    public function test_localInstanceCall_instance() {
        $testEntity = $this->localPhockitoInstance->mock( new TestEntity( 'a', 'b', 'c' ) );
        $testEntity->getA();

        $this->jePhockito
                ->verify( $testEntity )
                ->getA();
    }


    public function test_parentInstanceCall_classConstant() {
        $testEntity = $this->jePhockito->mock( TestEntity::CLASS_NAME );
        $testEntity->getA();

        $this->jePhockito
                ->verify( $testEntity )
                ->getA();
    }


    public function test_parentInstanceCall_string() {
        $testEntity = $this->jePhockito->mock(
            '\DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity'
        );
        $testEntity->getA();

        $this->jePhockito
                ->verify( $testEntity )
                ->getA();
    }


    public function test_parentInstanceCall_instance() {
        $testEntity = $this->jePhockito->mock( new TestEntity( 'a', 'b', 'c' ) );
        $testEntity->getA();

        $testEntity1 = $this->jePhockito->verify( $testEntity );
        $testEntity1->getA();

        $this->jePhockito
                ->verify( $testEntity )
                ->getA();
    }
}
