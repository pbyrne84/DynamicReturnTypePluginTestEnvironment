<?php

namespace DynamicReturnTypePluginTestEnvironment\TestClasses;


class TestEntity {
    const CLASS_NAME = __CLASS__;

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
