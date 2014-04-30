<?php
/**
 * Created by IntelliJ IDEA.
 * User: patrick.byrne
 * Date: 30/04/2014
 * Time: 08:51
 */

namespace DynamicReturnTypePluginTestEnvironment\TestClasses;


interface TestInterface {

    const INTERFACE_NAME = __CLASS__;

    /**
     * @return TestInterface
     */
    public function getThis();
} 