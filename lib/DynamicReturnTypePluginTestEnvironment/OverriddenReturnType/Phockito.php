<?php

namespace DynamicReturnTypePluginTestEnvironment\OverriddenReturnType;


class Phockito {
    const CLASS_NAME = __CLASS__;


    public function verify( $verify ){
        return '';
    }

    public function mock( $verify ){
        return '';
    }


}
