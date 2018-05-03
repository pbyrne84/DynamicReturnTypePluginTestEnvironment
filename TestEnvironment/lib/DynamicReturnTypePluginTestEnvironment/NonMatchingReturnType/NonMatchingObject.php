<?php

namespace DynamicReturnTypePluginTestEnvironment\SecondaryMatchingReturnType;


class NonMatchingObject {
    const CLASS_NAME = __CLASS__;


    /**
     * @param $verify
     *
     * @return string
     */
    public function verify( /** @noinspection PhpUnusedParameterInspection */
            $verify ) {
        return '';
    }


    /**
     * @param $mock
     *
     * @return \SimpleXmlElement
     */
    public function mock( /** @noinspection PhpUnusedParameterInspection */
            $mock ) {
        return null;
    }


    public function maskMock( /** @noinspection PhpUnusedParameterInspection */
            $mock ) {
        return null;
    }

}
