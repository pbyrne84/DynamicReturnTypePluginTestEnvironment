<?php

namespace DynamicReturnTypePluginTestEnvironment\TestClasses;


class ClassBroker {
    const CLASS_NAME = __CLASS__;


    public function getClassUsingMask( $class ) {

    }


    /**
     * @param $class
     */
    public function getClassWithoutMask( $class ) {

    }


}
 