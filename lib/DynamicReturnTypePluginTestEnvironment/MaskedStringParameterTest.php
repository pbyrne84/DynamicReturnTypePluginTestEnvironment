<?php
namespace DynamicReturnTypePluginTestEnvironment;

use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\Phockito;
use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCase;

class MaskedStringParameterTest extends PhockitoTestCase {
    const CLASS_NAME = __CLASS__;

    /** @var Phockito */
    private $localPhockito;


    function __construct() {
        $this->localPhockito = new Phockito();
    }


   public function test_stringParentField() {
        $test_Foo_Model = $this->phockito->maskMock( 'Foo' );
        $test_Foo_Model->getFoo();

        $this->testTypeHint( $test_Foo_Model );
    }


    private function testTypeHint( \Test_Foo_Model $test ) {

    }


    public function test_stringLocalField() {
        $test_Foo_Model = $this->localPhockito->maskMock( 'Foo' );
        $test_Foo_Model->getFoo();

        $this->testTypeHint( $test_Foo_Model );
    }


    public function test_stringStaticCall() {
        $test_Foo_Model = $this->phockito->maskMock( 'Foo' );
        $test_Foo_Model->getFoo();

        $this->testTypeHint( $test_Foo_Model );
    }


    public function test_parentMethod() {
        $test_Foo_Model = $this->parentMaskMock( 'Foo' );
        $test_Foo_Model->getFoo();

        $this->testTypeHint( $test_Foo_Model );
    }

    public function test_staticMethod() {
        $test_Foo_Model = PhockitoTestCase::parentMaskMock( 'Foo' );
        $test_Foo_Model->getFoo();

        $this->testTypeHint( $test_Foo_Model );
    }


    public function test_localMethod() {
        $test_Foo_Model = $this->localMaskMock( 'Foo' );
        $test_Foo_Model->getFoo();
    }


    private function localMaskMock( $string ) {
    }


    public function test_functionCall() {
        $test_Foo_Model = maskMock( 'Foo' );
        $test_Foo_Model->getFoo();

        $this->testTypeHint( $test_Foo_Model );
    }

}