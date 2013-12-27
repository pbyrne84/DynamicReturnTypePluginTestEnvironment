<?php
namespace DynamicReturnTypePluginTestEnvironment\OverriddenReturnType;

class PhockitoTestCaseFactory {
    const CLASS_NAME = __CLASS__;


    /**
     * @return PhockitoTestCase
     */
    public function createPhockitoTestCase() {
        return new PhockitoTestCase();
    }
}
 