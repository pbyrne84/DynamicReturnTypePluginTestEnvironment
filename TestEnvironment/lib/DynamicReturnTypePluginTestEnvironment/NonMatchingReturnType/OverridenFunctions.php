<?php

namespace DynamicReturnTypePluginTestEnvironment\NonMatchingReturnType {

    /**
     * @param $class
     *
     * @return \SimpleXMLElement
     */
    function mock( /** @noinspection PhpUnusedParameterInspection */
            $class ) {
        return '';

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