<?php

namespace DynamicReturnTypePluginTestEnvironment\OverriddenReturnType;


class Phockito {
    const CLASS_NAME = __CLASS__;


    public static function verify( $verify ) {
        return '';
    }


    public static function mock( $mock ) {
        return '';
    }


    public static function maskMock( $mock ) {
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
