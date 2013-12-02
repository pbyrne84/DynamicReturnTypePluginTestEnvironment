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

    $implementingObj2 = $provider2->make( "Non object value" );
    $implementingObj2->count();


    $provider1 = new Provider();
    $DOMDocument = $provider1->make( \DomDocument::class );

}
