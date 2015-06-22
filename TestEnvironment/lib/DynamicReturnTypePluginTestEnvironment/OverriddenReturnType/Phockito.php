<?php

namespace DynamicReturnTypePluginTestEnvironment\OverriddenReturnType;


class Phockito implements \ArrayAccess{
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


    public function offsetExists( $offset ) {
        // TODO: Implement offsetExists() method.
    }


    public function offsetGet( $offset ) {
        // TODO: Implement offsetGet() method.
    }


    public function offsetSet( $offset, $value ) {
        // TODO: Implement offsetSet() method.
    }


    public function offsetUnset( $offset ) {
        // TODO: Implement offsetUnset() method.
}}

class ChildPhockitoTestCase extends Phockito{

}