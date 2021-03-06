<?php

namespace DynamicReturnTypePluginTestEnvironment;


use DynamicReturnTypePluginTestEnvironment\TestClasses\ClassBroker;
use DynamicReturnTypePluginTestEnvironment\TestClasses\ServiceBroker;
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestService;

class ChainedDynamicReturnTypeTest
{
    const CLASS_NAME = __CLASS__;


    /** @var \DynamicReturnTypePluginTestEnvironment\TestClasses\ClassBroker */
    private $classBroker;


    function __construct()
    {
        $this->classBroker = new ClassBroker();
    }


    public function test_noMask()
    {
        //need to rework custom signatures to allow chaining
        //signature	signature	#Ђ#M#Ђ#P#C\DynamicReturnTypePluginTestEnvironment\ChainedDynamicReturnTypeTest.classBroker:getClassWithoutMask:#K#C\DynamicReturnTypePluginTestEnvironment\TestClasses\ServiceBroker.CLASS_NAME|?:getServiceWithoutMask:#K#C\DynamicReturnTypePluginTestEnvironment\TestClasses\TestService.CLASS_NAME|?
        $serviceBroker = $this->classBroker->getClassWithoutMask(ServiceBroker::CLASS_NAME);


        $testService = $serviceBroker->getServiceWithoutMask(TestService::CLASS_NAME);
        $testService->run();
    }

    public function test_chainedNoMask()
    {
        //need to rework custom signatures to allow chaining
        //signature	signaturesignature	#Ђ#M#M#C\DynamicReturnTypePluginTestEnvironment\TestClasses\ClassBroker.getClassWithoutMask:getServiceWithoutMask:#K#C\DynamicReturnTypePluginTestEnvironment\TestClasses\TestService.CLASS_NAME|?

        $testService = $this->classBroker->getClassWithoutMask(ServiceBroker::CLASS_NAME)->getServiceWithoutMask(TestService::CLASS_NAME);
//signature	#M#M#C\DynamicReturnTypePluginTestEnvironment\TestClasses\ClassBroker.getClassWithoutMask.getServiceWithoutMask|#☘#M#M#C\DynamicReturnTypePluginTestEnvironment\TestClasses\ClassBroker.getClassWithoutMask.getServiceWithoutMaskª#K#C\DynamicReturnTypePluginTestEnvironment\TestClasses\TestService.CLASS_NAME♣|#M#☘#M#C\DynamicReturnTypePluginTestEnvironment\TestClasses\ClassBroker.getClassWithoutMaskª#K#C\DynamicReturnTypePluginTestEnvironment\TestClasses\ServiceBroker.CLASS_NAME♣.getServiceWithoutMask
        $testService->run();
    }


    public function test_mask()
    {
        //need to rework custom signatures to allow chaining
        //signature	signature	#Ђ#M#Ђ#P#C\DynamicReturnTypePluginTestEnvironment\ChainedDynamicReturnTypeTest.classBroker:getClassWithoutMask:#K#C\DynamicReturnTypePluginTestEnvironment\TestClasses\ServiceBroker.CLASS_NAME|?:getServiceWithoutMask:#K#C\DynamicReturnTypePluginTestEnvironment\TestClasses\TestService.CLASS_NAME|?
        $serviceBroker = $this->classBroker->getClassUsingMask('ServiceBroker');

        $testService = $serviceBroker->getServiceUsingMask('TestService');
        $testService->run();
    }


}
 