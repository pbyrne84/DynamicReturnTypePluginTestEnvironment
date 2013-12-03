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

    /**
     * @return \BaseReality\Provider\Provider
     */
    function getProvider() {
        return new \BaseReality\Provider\Provider();
    }

    /**
     * @return \BaseReality\Provider\Provider2
     */
    function getProvider2() {
        return new \BaseReality\Provider\Provider2();
    }

}

namespace DifferentNameSpace {
    use BaseReality\Provider\Provider;

    $provider = getProvider();

    $implementingObj1 = $provider->make( \DomDocument::class );
    $implementingObj1->createElement( "a" );

    $provider2 = getProvider2();

    $implementingObj2 = $provider2->make( "" );
    $implementingObj2->count();

    $provider1 = new Provider();
    $DOMDocument = $provider1->make( \DomDocument::class );
    $DOMDocument->childNodes;

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
        return new \BaseReality\Provider\Provider3();
    }

}


namespace a{
    use BaseReality\Provider\Provider3;

    $provider = getProvider();

    $implementingObj1 = $provider->make( \DomDocument::class );
    $implementingObj1->createElement( "a" );

    $provider3 = getProvider3();
    $make = $provider3->make( "" );

    $provider3b = new Provider3();
    $make1 = $provider3b->make( "" );

}