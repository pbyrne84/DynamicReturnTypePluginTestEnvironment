<?php

namespace DynamicReturnTypePluginTestEnvironment;


use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\ChildPhockitoTestCase;

class InheritanceTest {
    const CLASS_NAME = __CLASS__;


    public function test_inheritance(  ) {
        $childPhockitoTestCase = new ChildPhockitoTestCase();

        $test_Foo_Model = $childPhockitoTestCase->javascriptAliasingMock( 'Entity\User' );
        $test_Foo_Model->getFoo();
    }
}

