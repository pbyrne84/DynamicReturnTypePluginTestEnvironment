<?php
namespace DynamicReturnTypePluginTestEnvironment;

use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\Phockito;
use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCase;
use Test_Foo_Model;

class MaskedStringParameterTest extends PhockitoTestCase {
    const CLASS_NAME = __CLASS__;

    /** @var Phockito */
    private $localPhockito;


    function __construct() {
        $this->localPhockito = new Phockito();
    }


    public function test_stringParentField_single() {
        $test_Foo_Model = $this->phockito->maskMock( 'Foo' );
        $test_Foo_Model->getFoo();

        $this->testTypeHint( $test_Foo_Model );
    }

    public function test_stringParentField_list() {
        $test_Foo_ModelList = $this->phockito->maskMockList( 'Test_Foo_Model' );
        foreach( $test_Foo_ModelList as $test_Foo_Model ){
            $test_Foo_Model->getFoo();
            $this->testTypeHint( $test_Foo_Model );
        }
    }


    public function test_stringGroovyAliasingFunctionCall_User() {
        $test_Foo_Model = $this->phockito->groovyAliasingMock( 'Entity\User' );
        $test_Foo_Model->getFoo();

        $this->testTypeHint( $test_Foo_Model );
    }


    public function test_stringJavascriptAliasingFunctionCall_User() {
        $test_Foo_Model = $this->phockito->javascriptAliasingMock( 'Entity\User' );
        $test_Foo_Model->getFoo();

        $this->testTypeHint( $test_Foo_Model );
    }


    public function test_stringJavascriptAliasingFunctionCall_passedObjectIsReturnedOutAsScriptFindsNoMatch() {
        $DOMDocument = $this->phockito->javascriptAliasingMock( new \DOMDocument() );
        $DOMDocument->saveXML(); 
    }


    public function test_stringJavascriptAliasingFunctionCall_TestEntity() {
        $testEntity = $this->phockito->javascriptAliasingMock( 'Entity\Test' );
        $testEntity->getA();
    }


    public function test_stringGroovyAliasingFunctionCall_User_byMethodCall() {
        $test_Foo_Model = $this->phockito->groovyAliasingMock( 'Entity\User' );
        $test_Foo_Model->getFoo();

        $this->testTypeHint( $test_Foo_Model );
    }

    public function test_stringGroovyAliasingFunctionCall_User_byFunctionCall() {
        $test_Foo_Model = aliasMock( 'Entity\User' );
        $test_Foo_Model->getFoo();

        $this->testTypeHint( $test_Foo_Model );
    }


    public function test_stringGroovyAliasingFunctionCall_TestEntity() {
        $testEntity = $this->phockito->groovyAliasingMock( 'Entity\Test' );
        $testEntity->getA();
    }


    private function testTypeHint( \Test_Foo_Model $test ) {
    }


    public function test_stringLocalField_single() {
        $test_Foo_Model = $this->localPhockito->maskMock( 'Foo' );
        $test_Foo_Model->getFoo();

        $this->testTypeHint( $test_Foo_Model );
    }

    public function test_stringLocalField_list() {
        $test_Foo_ModeList = $this->localPhockito->maskMockList( 'Test_Foo_Model' );
        foreach ( $test_Foo_ModeList as $test_Foo ) {
            $test_Foo->getFoo();
            $this->testTypeHint( $test_Foo );
        }
    }



    public function test_stringStaticCall_single() {
        $test_Foo_Model = $this->phockito->maskMock( 'Foo' );
        $test_Foo_Model->getFoo();

        $this->testTypeHint( $test_Foo_Model );
    }


    public function test_stringStaticCall_list() {
        $test_Foo_ModeList = $this->phockito->maskMockList( 'Test_Foo_Model' );
        foreach ( $test_Foo_ModeList as $test_Foo ) {
            $test_Foo->getFoo();
            $test_Foo->getThis()->getThis();
            $this->testTypeHint( $test_Foo );
        }
    }




    public function test_parentMethod_single() {
        $test_Foo_Model = $this->parentMaskMock( 'Foo' );
        $test_Foo_Model->getFoo();

        $this->testTypeHint( $test_Foo_Model );
    }


    public function test_staticMethod_single() {
        $test_Foo_Model = PhockitoTestCase::parentMaskMock( 'Foo' );
        $test_Foo_Model->getFoo();

        $this->testTypeHint( $test_Foo_Model );
    }



    public function test_parentMethod_list() {
        $test_Foo_ModelList = $this->parentMaskMockList( 'Test_Foo_Model' );
        foreach ( $test_Foo_ModelList as $test_Foo_Model) {
            $test_Foo_Model->getFoo();
            $this->testTypeHint( $test_Foo_Model );
        }
    }


    public function test_parentMethodClassConstant_list() {
        $test_Foo_ModelList = $this->parentMaskMockList( Test_Foo_Model::class );
        foreach ( $test_Foo_ModelList as $test_Foo_Model) {
           // $test_Foo_Model->getFoo();
            $this->testTypeHint( $test_Foo_Model );
        }
    }





    public function test_staticMethod_list() {
        $test_Foo_ModelList = PhockitoTestCase::parentMaskMockList( 'Test_Foo_Model' );
        foreach ( $test_Foo_ModelList as $test_Foo_Model) {
            $test_Foo_Model->getFoo();
            $this->testTypeHint( $test_Foo_Model );
        }

    }



    public function test_localMethod() {
        $test_Foo_Model = $this->localMaskMock( 'Foo' );
        $test_Foo_Model->getFoo();
    }


    private function localMaskMock( $string ) {
    }


    public function test_functionCallSingle() {
        $test_Foo_Model = maskMock( 'Foo' );
        $test_Foo_Model->getFoo();

        $this->testTypeHint( $test_Foo_Model );
    }


    public function test_functionCallList() {
        $test_Foo_ModelList = maskMockList( 'Test_Foo_Model' );
        foreach ( $test_Foo_ModelList as $test_Foo_Model ) {
            $test_Foo_Model->getFoo();
            $this->testTypeHint( $test_Foo_Model );
        }

    }



}
