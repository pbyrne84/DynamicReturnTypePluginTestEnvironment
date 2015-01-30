<?php

class Test_Foo_Model
{
    const CLASS_NAME = __CLASS__;


    public function getFoo(){

    }


    /**
     * @return Test_Foo_Model
     */
    public function getThis(){
        return $this;
    }
}
