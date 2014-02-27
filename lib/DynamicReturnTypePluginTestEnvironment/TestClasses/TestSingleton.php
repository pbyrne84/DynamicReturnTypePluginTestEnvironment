<?php

namespace DynamicReturnTypePluginTestEnvironment\TestClasses;


use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\Phockito;

class TestSingleton {
    const CLASS_NAME = __CLASS__;

    private static $instance;


    /**
     * @return self
     */
    public static function getInstanceDocTypedSelf() {
        if ( self::$instance === null ) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * @return Phockito
     */
    public function getPhockito() {

    }


    public function getRepository( $name ){

    }


    /**
     * @return $this
     */
    public static function getInstanceDocTypedThis() {
        if ( self::$instance === null ) {
            self::$instance = new self();
        }

        return self::$instance;
    }



    /**
     * @return TestSingleton
     */
    public static function getInstanceDocTypedClass() {
        if ( self::$instance === null ) {
            self::$instance = new self();
        }

        return self::$instance;
    }



    /**
     * @return static
     */
    public static function getInstanceDocTypedStatic() {
        if ( self::$instance === null ) {
            self::$instance = new self();
        }

        return self::$instance;
    }






}
 