<?php

namespace DynamicReturnTypePluginTestEnvironment;


use DynamicReturnTypePluginTestEnvironment\SecondaryMatchingReturnType\NonMatchingObject;
use DynamicReturnTypePluginTestEnvironment\SecondaryMatchingReturnType\SecondaryMatchingTestCase;

class SecondaryMatchingTest extends SecondaryMatchingTestCase {
    const CLASS_NAME = __CLASS__;


    private $localNonMatchingObject;


    function __construct() {
        $this->localNonMatchingObject = new NonMatchingObject();
    }


    public function test_parentMethodCall(){
        $simpleXMLElement1 = $this->mock( 'MaskedCreation' );
        $simpleXMLElement1->secondary()
                ->secondary()
                ->secondary();
    }


    public function test_differentNamespacedFunction(){
        //Returns mixed|SimpleXMLElement with plugin disabled when it should be SimpleXMLElement, seems like there are some function namespace quirks
        $simpleXMLElement1 = \DynamicReturnTypePluginTestEnvironment\SecondaryMatchingReturnType\mock( '\SplFileInfo' );
        $simpleXMLElement1->addAttribute( '', '');

        //Returns mixed|SimpleXMLElement with plugin disabled when it should be SimpleXMLElement
        $simpleXMLElement2 = \DynamicReturnTypePluginTestEnvironment\SecondaryMatchingReturnType\mock( '' );
        $simpleXMLElement2->addAttribute( '', '');

        //Returns int|mixed|void with plugin disabled when it should be int
        /** @noinspection PhpUnusedLocalVariableInspection */
        $int = \DynamicReturnTypePluginTestEnvironment\SecondaryMatchingReturnType\verify( 'banana' );
    }


    /**
     * @param $class
     * @return \SimpleXMLElement
     */
    private function localGetFullMock( /** @noinspection PhpUnusedParameterInspection */
            $class ) {
        return new \SimpleXMLElement('');
    }



}
