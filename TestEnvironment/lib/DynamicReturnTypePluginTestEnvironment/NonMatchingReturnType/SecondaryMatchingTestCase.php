<?php

namespace DynamicReturnTypePluginTestEnvironment\SecondaryMatchingReturnType;


class SecondaryMaskedCreation{

    /**
     * @return $this
     */
    public function secondary(  ) {
        return $this;
    }

}

class SecondaryMatchingTestCase {
    const CLASS_NAME = __CLASS__;

    /** @var  NonMatchingObject */
    protected $nonMatchingObject;


    /**
     * @param $class
     *
     * @return string
     */
    public function verify( $class ) {
    }


    /**
     * @param $class
     *
     * @return \SimpleXMLElement
     */
    public function mock( $class ) {
    }


}



