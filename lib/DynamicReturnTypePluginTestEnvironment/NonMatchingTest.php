<?php

namespace DynamicReturnTypePluginTestEnvironment;


use DynamicReturnTypePluginTestEnvironment\NonMatchingReturnType\NonMatchingObject;
use DynamicReturnTypePluginTestEnvironment\NonMatchingReturnType\NonMatchingTestCase;

class NonMatchingTest extends NonMatchingTestCase {
    const CLASS_NAME = __CLASS__;


    private $localNonMatchingObject;


    function __construct() {
        $this->localNonMatchingObject = new NonMatchingObject();
    }


    public function test_parentMethodCall(){
        $simpleXMLElement1 = $this->mock( 'A' );
        $simpleXMLElement1->addAttribute( '', '');

        $simpleXMLElement2 = $this->mock( '' );
        $simpleXMLElement2->addAttribute( '', '');

        //Should still equate to string
        $verify = $this->verify( '' );
    }


    public function test_localMethodCall_withValue(){
        $simpleXMLElement1 = $this->localGetFullMock( '\SplFileInfo' );
        $simpleXMLElement1->addAttribute( '', '');

        $simpleXMLElement2 = $this->localGetFullMock( '' );
        $simpleXMLElement2->addAttribute( '', '');
    }


    public function test_parentField(){
        $simpleXMLElement1 = $this->nonMatchingObject->mock( '\SplFileInfo' );
        $simpleXMLElement1->addAttribute( '', '');

        $simpleXMLElement2 = $this->nonMatchingObject->mock( '' );
        $simpleXMLElement2->addAttribute( '', '');

        //Should still equate to string
        $verify = $this->nonMatchingObject->verify( '' );
    }


    public function test_localField(){
        $simpleXMLElement1 = $this->localNonMatchingObject->mock( '\SplFileInfo' );
        $simpleXMLElement1->addAttribute( '', '');

        $simpleXMLElement2 = $this->localNonMatchingObject->mock( '' );
        $simpleXMLElement2->addAttribute( '', '');

        //Should still equate to string
        $verify = $this->localNonMatchingObject->verify( '' );
    }


    public function test_differentNamespacedFunction(){
        //Returns mixed|SimpleXMLElement with plugin disabled when it should be SimpleXMLElement, seems like there are some function namespace quirks
        $simpleXMLElement1 = \DynamicReturnTypePluginTestEnvironment\NonMatchingReturnType\mock( '\SplFileInfo' );
        $simpleXMLElement1->addAttribute( '', '');

        //Returns mixed|SimpleXMLElement with plugin disabled when it should be SimpleXMLElement
        $simpleXMLElement2 = \DynamicReturnTypePluginTestEnvironment\NonMatchingReturnType\mock( '' );
        $simpleXMLElement2->addAttribute( '', '');

        //Returns int|mixed|void with plugin disabled when it should be int
        $int = \DynamicReturnTypePluginTestEnvironment\NonMatchingReturnType\verify( 'banana' );
    }


    /**
     * @param $class
     * @return \SimpleXMLElement
     */
    private function localGetFullMock( $class ) {
        return new \SimpleXMLElement('');
    }



}
