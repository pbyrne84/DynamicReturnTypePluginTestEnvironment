<?php

namespace DynamicReturnTypePluginTestEnvironment\TestClasses;


class TestEntity {
    const CLASS_NAME = __CLASS__;

    const CLASS_NAME_AS_STRING  = 'DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity';

    /** @var string */
    private $a;

    /** @var string */
    private $b;

    /** @var string */
    private $c;


    /**
     * @param string $a
     * @param string $b
     * @param string $c
     */
    function __construct( $a, $b, $c ) {

        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }


    /**
     * @return string
     */
    public function getA() {
        return $this->a;
    }

    /**
     * @return TestEntity
     */
    public function getThis()
    {
        return $this;
    }

    /**
     * @return string
     */
    public function getB() {
        return $this->b;
    }


    /**
     * @return string
     */
    public function getC() {
        return $this->c;
    }

}
