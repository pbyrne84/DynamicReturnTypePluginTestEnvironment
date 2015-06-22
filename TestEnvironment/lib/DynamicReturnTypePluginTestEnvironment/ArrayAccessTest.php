<?php

namespace DynamicReturnTypePluginTestEnvironment;


use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\Phockito;

class ArrayAccessTest {
    const CLASS_NAME = __CLASS__;


    public function test_variableArrayAccess(  ) {
        $phockito = new Phockito();
        $domDocument = $phockito[ '\DomDocument' ];
        $domDocument->saveXml();
    }
}