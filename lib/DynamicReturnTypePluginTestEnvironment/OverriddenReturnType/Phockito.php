<?php

namespace DynamicReturnTypePluginTestEnvironment\OverriddenReturnType;


class Phockito {
    const CLASS_NAME = __CLASS__;


    public static function verify( /** @noinspection PhpUnusedParameterInspection */
            /** @noinspection PhpUnusedParameterInspection */
            $verify ) {
        return '';
    }


    public static function mock( /** @noinspection PhpUnusedParameterInspection */
            $mock ) {
        return '';
    }


    public static function maskMock( /** @noinspection PhpUnusedParameterInspection */
            $mock ) {
        return '';
    }


    public static function javascriptMaskMock( $mock ) {

    }


    public static function javascriptAliasingMock( $mock ) {

    }


    public static function groovyMaskMock( $mock ) {

    }


    public static function groovyAliasingMock( $mock ) {

    }



}
