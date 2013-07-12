<?php

namespace DynamicReturnTypePluginTestEnvironment\NonMatchingReturnType;


class NonMatchingObject {
    const CLASS_NAME = __CLASS__;


    /**
     * @param $verify
     *
     * @return string
     */
    public function verify( $verify ) {
        return '';
    }


    /**
     * @param $mock
     *
     * @return \SimpleXmlElement
     */
    public function mock( $mock ) {
        return '';
    }


    public function maskMock( $mock ) {
        return '';
    }

}
