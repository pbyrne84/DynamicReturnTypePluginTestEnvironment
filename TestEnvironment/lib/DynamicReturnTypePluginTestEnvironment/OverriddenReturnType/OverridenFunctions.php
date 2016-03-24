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


    /**
     * @param string $class
     *
     * this is to test that name space resolution works
     */
    function ifInNameSpacedShouldBeMaskedMock( $class ){

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


    /**
     * @param string $class
     *
     * should not mask as not in namespace
     */
    function ifInNameSpacedShouldBeMaskedMock( $class ){

    }
}
