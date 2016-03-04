<?php

namespace DynamicReturnTypePluginTestEnvironment;


use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\ChildPhockitoTestCase;


interface TestServiceBrokerInterface {

    function createImplementation( $className );

}




interface TestServiceBrokerChildInterface extends TestServiceBrokerInterface {
    function createImplementation( $className );
}


trait TestServiceBrokerTrait{

    function createImplementation( $className ){

    }
}

trait WrapperTestServiceBrokerTrait{
    use TestServiceBrokerTrait;
}


class InterfaceTestDirectInterfaceTest implements TestServiceBrokerInterface {
    const CLASS_NAME = __CLASS__;


    function createImplementation( $className ) {

    }


    public function test_interface(  ) {
        $this->createImplementation( \DomDocument::class )
                ->createAttribute( "meow" );
    }
}



class InterfaceTestChildInterfaceTest implements TestServiceBrokerChildInterface {
    const CLASS_NAME = __CLASS__;


    function createImplementation( $className ) {

    }


    public function test_interface(  ) {
        $this->createImplementation( \DomDocument::class )
                ->createAttribute( "meow" );
    }
}


class TestServiceBrokerTraitTest {
    use TestServiceBrokerTrait;


    function test_trait(){
        $this->createImplementation( \DomDocument::class )
                ->createAttribute( "meow" );
    }
}


class TestServiceBrokerWrapperTraitTest {
    use WrapperTestServiceBrokerTrait;


    function test_trait(){
        $this->createImplementation( \DomDocument::class )
                ->createAttribute( "meow" );
    }
}




