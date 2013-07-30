<?php

namespace DynamicReturnTypePluginTestEnvironment;


use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\Phockito;
use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoChild;
use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCase;
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity;

class StaticCallTest extends PhockitoTestCase {
    const CLASS_NAME = __CLASS__;


    public function test_directStaticMethodCall_string() {
        $domDocument = Phockito::mock( '\DomDocument' );
        Phockito::verify( $domDocument )
                ->saveXml();
    }


    public function test_parentStaticMethodCall_string() {
        $domDocument = PhockitoChild::mock( '\DomDocument' );
        PhockitoChild::verify( $domDocument )
                ->saveXml();
    }


    public function test_directStaticMethodCall_constant() {
        $testEntity = Phockito::mock( TestEntity::CLASS_NAME );
        PhockitoChild::verify( $testEntity )
                ->getA();
    }


    public function test_parentStaticMethodCall_constant() {
        $testEntity = PhockitoChild::mock( TestEntity::CLASS_NAME );
        PhockitoChild::verify( $testEntity )
                ->getA();
    }


    public function test_directStaticMethodCall_instance() {
        $testEntity = Phockito::mock( new TestEntity( '', '', '' ) );
        PhockitoChild::verify( $testEntity )
                ->getA();
    }


    public function test_parentStaticMethodCall_instance() {
        $testEntity = PhockitoChild::mock( new TestEntity( '', '', '' )  );
        PhockitoChild::verify( $testEntity )
                ->getA();
    }


}
