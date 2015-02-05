<?php
namespace DynamicReturnTypePluginTestEnvironment\Symfony;
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class TestController extends Controller {
    const CLASS_NAME = __CLASS__;
    private $meow = 'moo';


    public function test_stringParameter_leadingSlash() {
        $serviceBroker = $this->get( 'service_broker' );
        $testService   = $serviceBroker->getServiceWithoutMask( '\DynamicReturnTypePluginTestEnvironment\TestClasses\TestService' );

        $testService->run();

        return $this->render( 'default/index.html.twig' );
    }

    public function test_stringParameter_classConstantAlias() {
        $serviceBroker = $this->get( 'service_broker' );
        $testService   = $serviceBroker->getServiceWithoutMask( TestService::CLASS_NAME );

        $testService->run();

        return $this->render( 'default/index.html.twig' );
    }
//signature	#Ђ#M#M#C\DynamicReturnTypePluginTestEnvironment\Symfony\TestController.get:getServiceWithoutMask:DynamicReturnTypePluginTestEnvironment\TestClasses\TestService
//signature	#Ђ#M#M#C\DynamicReturnTypePluginTestEnvironment\Symfony\TestController.get:getServiceWithoutMask:DynamicReturnTypePluginTestEnvironment\TestClasses\TestService
    public function test_stringParameter_classConstant() {
        $serviceBroker = $this->get( 'service_broker' );
        $testService   = $serviceBroker->getServiceWithoutMask( TestService::class );

        $testService->run();

        return $this->render( 'default/index.html.twig' );
    }



    public function test_stringParameter_noLeadingSlash() {
        $serviceBroker = $this->get( 'service_broker' );
        $testService   = $serviceBroker->getServiceWithoutMask( 'DynamicReturnTypePluginTestEnvironment\TestClasses\TestService' );

        $testService->run();

        return $this->render( 'default/index.html.twig' );
    }



    public function test_stringParameter_noLeadingSlashChaining() {
        $testService   = $this->get( 'service_broker' )->getServiceWithoutMask( 'DynamicReturnTypePluginTestEnvironment\TestClasses\TestService' );

        $testService->run();

        return $this->render( 'default/index.html.twig' );
    }






}