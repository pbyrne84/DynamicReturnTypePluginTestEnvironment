<?php

namespace DynamicReturnTypePluginTestEnvironment\OverriddenReturnType {

    /**
     * @param $class
     *
     * @return mixed
     */
    function mock( /** @noinspection PhpUnusedParameterInspection */
            $class ) {
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
    function mock( /** @noinspection PhpUnusedParameterInspection */
            $class ) {
        return '';

    }

    /**
     * @param $class
     */
    function verify( $class ) {

    }


    function maskMock( $class ) {

    }

    function maskMockList( $class ) {

    }




    function aliasMock( $reference ){

    }

}
