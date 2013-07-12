<?php

namespace DynamicReturnTypePluginTestEnvironment\NonMatchingReturnType {

    /**
     * @param $class
     *
     * @return \SimpleXMLElement
     */
    function mock( $class ) {
        return '';

    }

    /**
     * @param $class
     *
     * @return int
     */
    function verify( $class ) {
        return 0;
    }


}