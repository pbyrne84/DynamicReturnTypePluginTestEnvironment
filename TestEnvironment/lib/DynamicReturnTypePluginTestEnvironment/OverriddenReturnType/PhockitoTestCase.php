<?php

namespace DynamicReturnTypePluginTestEnvironment\OverriddenReturnType;


interface PHPUnit_Framework_MockObject_MockObject{

    /** @return PHPUnit_Framework_MockObject_MockObject */
    public function isMock();
}

class PhockitoTestCase {
    const CLASS_NAME = __CLASS__;

    /** @var  Phockito */
    protected $phockito;


    public function verify( $class ) {

    }


    public function mock( $class ) {

    }


    public function phpUnitPartialMock( $partialMock ){

    }


    public function parentMaskMock( $class ) {

    }


    public function parentMaskMockList( $class ) {

    }




}
