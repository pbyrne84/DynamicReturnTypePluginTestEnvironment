<?php

namespace DynamicReturnTypePluginTestEnvironment;


use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\Phockito;

class ArrayAccessTest {
    const CLASS_NAME = __CLASS__;

    /** @var  Phockito */
    private $phockito;


    public function test_variableStringArrayAccess(  ) {
        $phockito = new Phockito();
        $domDocument = $phockito[ '\DomDocument' ];
        $domDocument->saveXml();
    }

    public function test_variableClassReferenceAccess(  ) {
        $phockito = new Phockito();
        $domDocument = $phockito[ \DomDocument::class ];
        $domDocument->saveXml();
    }


    public function test_fieldStringArrayAccess(  ) {
        $domDocument = $this->phockito[ '\DomDocument' ];
        $domDocument->saveXml();
    }


    public function test_fieldClassReferenceAccess(  ) {
        $domDocument = $this->phockito[ \DomDocument::class ];
        $domDocument->saveXml();
    }
}