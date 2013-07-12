<?php

namespace DynamicReturnTypePluginTestEnvironment;



use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\Phockito;
use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCase;
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity;

class ParentMethodCallTest extends PhockitoTestCase {
    const CLASS_NAME = __CLASS__;

    /** @var Phockito */
    private $localPhockitoInstance;


    public function __construct() {
        $this->localPhockitoInstance = new  Phockito();
    }


    public function test_parentMethod_classConstant() {
        $maxValueSet = $this->mock( TestEntity::CLASS_NAME );
        $maxValueSet->getA();

        $this->verify( $maxValueSet )->getA();
    }


    public function test_parentMethod_string() {
        $maxValueSet = $this->mock( '\DynamicReturnTypePluginTestEnvironment\TestClasses\TestEntity'  );
        $maxValueSet->getA();

        $this->verify( $maxValueSet )->getA();
    }

 
    public function test_parentMethod_instance() {
        $maxValueSet =  $this->mock( new TestEntity( 'a', 'b' , 'c') );
        $maxValueSet->getA();

        $this->verify( $maxValueSet )->getA();
    }

}
