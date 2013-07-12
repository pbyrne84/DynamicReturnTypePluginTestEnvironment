<?php

namespace DynamicReturnTypePluginTestEnvironment\OverriddenReturnType {

    /**
     * @param $class
     *
     * @return mixed
     */
    function mock( $class ) {
        return '';

    }

    function verify( $class ) {

    }


}


namespace {
    /**
     * @param $class
     *
     * @return mixed
     */
    function mock( $class ) {
        return '';

    }

    /**
     * @return mixed
     *
     * @param $class
     */
    function verify( $class ) {

    }


    function maskMock( $class ) {

    }
}
