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


    public static function maskMockList( /** @noinspection PhpUnusedParameterInspection */
            $mock ) {
        return '';
    }





    public function javascriptMaskMock( $mock ) {

    }


    public function javascriptAliasingMock( $mock ) {

    }


    public function groovyMaskMock( $mock ) {

    }


    public function groovyAliasingMock( $mock ) {

    }



}

class ChildPhockitoTestCase extends Phockito{

}