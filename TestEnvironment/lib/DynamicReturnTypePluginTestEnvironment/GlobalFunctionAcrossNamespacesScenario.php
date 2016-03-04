<?php
namespace BaseReality\Provider {

    class Provider {
        /**
         * @param $foo
         */
        function make($foo) {
        }
    }

    class Provider2 {

        /**
         * @param $foo
         * @return \SimpleXMLElement
         */
        function make($foo) {
        }
    }

    class Provider3 {

        /**
         * @param $foo
         * @return string
         */
        function make($foo) {
        }
    }


}

namespace {
    use BaseReality\Provider\Provider;
    use BaseReality\Provider\Provider2;

    /**
     * @return Provider
     */
    function getProvider() {
        return new Provider();
    }

    /**
     * @return Provider2
     */
    function getProvider2() {
        return new Provider2();
    }

}



namespace a{
    /**
     * @return \BaseReality\Provider\Provider
     */
    function getProvider(){

    }

    /**
     * @return \BaseReality\Provider\Provider3
     */
    function getProvider3() {
        /** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
        return new \BaseReality\Provider\Provider3();
    }

}


namespace a{
    use BaseReality\Provider\Provider3;

    $provider = getProvider();

    $implementingObj1 = $provider->make( \DomDocument::class );
    $implementingObj1->createElement( "a" );

    $provider3 = getProvider3();
    /** @noinspection PhpUnusedLocalVariableInspection */
    $make = $provider3->make( "" );

    $provider3b = new Provider3();
    /** @noinspection PhpUnusedLocalVariableInspection */
    $make1 = $provider3b->make( "" );

}