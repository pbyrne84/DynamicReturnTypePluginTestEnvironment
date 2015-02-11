<?php

class Bouh
{
    public function truc($name)
    {
        echo $name . "\n";
    }
}


/**
 * @return object|\DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoChild|object
 */
function bouh() {
    return new \DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoChild();
};

$ting = bouh();

$bouh = $ting->mock('Bouh');
$bouh->truc('chose');