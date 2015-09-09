<?php
namespace DynamicReturnTypePluginTestEnvironment;
use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\Phockito;
use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCase;
use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCaseFactory;
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity;

class FieldCallTest extends PhockitoTestCase {
    const CLASS_NAME = __CLASS__;

    private $phockitoTestCaseFactory;

    const LOCAL_TestEntity_CLASS_ALIAS = TestEntity::class;

    const LOCAL_TestEntity_STRING_ALIAS = TestEntity::CLASS_NAME_AS_STRING;

    /** @var Phockito */
    private $localPhockitoInstance;


    public function __construct() {
        $this->localPhockitoInstance   = new Phockito();
        $this->phockitoTestCaseFactory = new PhockitoTestCaseFactory();
    }


    public function test_localInstanceCall_classConstant() {
        $testEntity = $this->localPhockitoInstance->mock( TestEntity::CLASS_NAME );
        $testEntity->getA();

        $this->localPhockitoInstance
                ->verify( $testEntity )
                ->getA();
    }


    public function test_localInstanceCall_classStringConstant() {
        $testEntity = $this->localPhockitoInstance->mock( TestEntity::CLASS_NAME_AS_STRING );
        $testEntity->getA();

        $this->localPhockitoInstance
                ->verify( $testEntity )
                ->getA();
    }


    public function test_localInstanceCall_classConstantAlias() {
        $testEntity = $this->localPhockitoInstance->mock( self::LOCAL_TestEntity_STRING_ALIAS );
        $testEntity->getA();

        $this->localPhockitoInstance
                ->verify( $testEntity )
                ->getA();
    }


    public function test_localInstanceCall_classConstantStringAlias() {
        $testEntity = $this->localPhockitoInstance->mock( self::LOCAL_TestEntity_CLASS_ALIAS );
        $testEntity->getA();

        $this->localPhockitoInstance
                ->verify( $testEntity )
                ->getA();
    }





    public function test_localInstanceCall_nativeClassConstant() {
        $testEntity = $this->localPhockitoInstance->mock( TestEntity::class );
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

        $this->phockito
                ->verify( $testEntity )
                ->getA();
    }


    public function test_parentInstanceCall_classConstant() {
        $testEntity = $this->phockito->mock( TestEntity::CLASS_NAME );
        $testEntity->getA();

        $this->phockito
                ->verify( $testEntity )
                ->getA();
    }


    public function test_parentInstanceCall_classStringConstant() {
        $testEntity = $this->phockito->mock( TestEntity::CLASS_NAME_AS_STRING );
        $testEntity->getA();

        $this->phockito
                ->verify( $testEntity )
                ->getA();
    }




    public function test_parentInstanceCall_nativeClassConstant() {
        $testEntity = $this->phockito->mock( TestEntity::class );
        $testEntity->getA();

        $this->phockito
                ->verify( $testEntity )
                ->getA();
    }



    public function test_parentInstanceCall_string() {
        $testEntity = $this->phockito->mock(
            '\DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity'
        );
        $testEntity->getA();

        $this->phockito
                ->verify( $testEntity )
                ->getA();
    }


    public function test_parentInstanceCall_instance() {
        $testEntity = $this->phockito->mock( new TestEntity( 'a', 'b', 'c' ) );
        $testEntity->getA();

        $testEntity1 = $this->phockito->verify( $testEntity );
        $testEntity1->getA();

        $this->phockito
                ->verify( $testEntity )
                ->getA();
    }


    public function test_fieldCallToNonDocTypedFactory() {
        $phockitoTestCase                           = $this->phockitoTestCaseFactory->createPhockitoTestCase();
        $testEntityWhereTestCaseIsDefinedInVariable = $phockitoTestCase->mock( TestEntity::class );
        $testEntityWhereTestCaseIsDefinedInVariable->getA();

        $testEntity2 = $this->phockitoTestCaseFactory->createPhockitoTestCase()
                ->mock( TestEntity::class );

        $testEntity2->getA();
    }

}
