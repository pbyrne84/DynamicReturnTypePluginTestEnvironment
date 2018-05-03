<?php

namespace DynamicReturnTypePluginTestEnvironment\SecondaryMatchingReturnType {

    /**
     * @param $class
     *
     * @return \SimpleXMLElement
     */
    function mock( /** @noinspection PhpUnusedParameterInspection */
            $class ) {
        return null;

    }

    /**
     * @param $class
     *
     * @return int
     */
    function verify( /** @noinspection PhpUnusedParameterInspection */
            $class ) {
        return 0;
    }


}