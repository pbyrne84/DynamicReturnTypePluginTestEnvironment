<?php

namespace DynamicReturnTypePluginTestEnvironment;



use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCaseFactory;
use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCase;
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity;

class ChimiChanga{
    /**
     * @return ChimiChanga
     */
    public function get(){
        return $this;
    }
}

class VariableMethodCallTest extends PhockitoTestCase {
    const CLASS_NAME = __CLASS__;

    const LOCAL_TestEntity_CLASS_ALIAS = TestEntity::class;

    const LOCAL_TestEntity_STRING_ALIAS = TestEntity::CLASS_NAME_AS_STRING;



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

    public function test_parentMethod_classConstantAlias() {
        $phockitoTestCase = new VariableMethodCallTest();
        $testEntity      = $phockitoTestCase->mock( self::LOCAL_TestEntity_CLASS_ALIAS );
        $testEntity->getA();

        $phockitoTestCase
                ->verify( $testEntity )
                ->getA();

        $this->passAsTypeHint( $testEntity );
    }

    public function test_parentMethod_classConstantStringAlias() {
        $phockitoTestCase = new VariableMethodCallTest();
        $testEntity      = $phockitoTestCase->mock( self::LOCAL_TestEntity_STRING_ALIAS );
        $testEntity->getA();

        $phockitoTestCase
                ->verify( $testEntity )
                ->getA();

        $this->passAsTypeHint( $testEntity );
    }



    public function test_parentMethod_classStringConstant() {
        $phockitoTestCase = new VariableMethodCallTest();
        $testEntity      = $phockitoTestCase->mock( TestEntity::CLASS_NAME_AS_STRING );
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


    public function test_factoryCallCreatesInstance() {
        $phockitoTestCaseFactory = new PhockitoTestCaseFactory();
        $phockitoTestCase1 = $phockitoTestCaseFactory->createPhockitoTestCase();

        $DOMDocument1 = $phockitoTestCase1->mock( '\DomDocument' );
        $DOMDocument1->hasAttributes();

        $phockitoTestCase2 = new PhockitoTestCase();
        $DOMDocument2 = $phockitoTestCase2->mock( '\DomDocument' );
        $DOMDocument2->hasAttributes();
    }


    public function test_partialMockMultiTypeMasking(){
        $phpUnitPartialMockUsingConstant = $this->phpUnitPartialMock(ChimiChanga::class);
        $phpUnitPartialMockUsingConstant->isMock()->isMock()->isMock();
        $phpUnitPartialMockUsingConstant->get()->get()->get();

        $phpUnitPartialMockUsingString = $this->phpUnitPartialMock('\\DynamicReturnTypePluginTestEnvironment\ChimiChanga');
        $phpUnitPartialMockUsingString->isMock();
        $phpUnitPartialMockUsingString->get();


    }
}
