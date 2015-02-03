<?php
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller {
    const CLASS_NAME = __CLASS__;


    public function test_stringParameter_leadingSlash() {
        $serviceBroker = $this->get( 'service_broker' );
        $testService   = $serviceBroker->getServiceWithoutMask( '\DynamicReturnTypePluginTestEnvironment\TestClasses\TestService' );

        $testService->run();

        return $this->render( 'default/index.html.twig' );
    }

    public function test_stringParameter_classConstantAlias() {
        $serviceBroker = $this->get( 'service_broker' );
        $testService   = $serviceBroker->getServiceWithoutMask( \DynamicReturnTypePluginTestEnvironment\TestClasses\TestService::CLASS_NAME );

        $testService->run();

        return $this->render( 'default/index.html.twig' );
    }


    public function test_stringParameter_classConstant() {
        $serviceBroker = $this->get( 'service_broker' );
        $testService   = $serviceBroker->getServiceWithoutMask( \DynamicReturnTypePluginTestEnvironment\TestClasses\TestService::class );

        $testService->run();

        return $this->render( 'default/index.html.twig' );
    }



    public function test_stringParameter_noLeadingSlash() {
        $serviceBroker = $this->get( 'service_broker' );
        $testService   = $serviceBroker->getServiceWithoutMask( 'DynamicReturnTypePluginTestEnvironment\TestClasses\TestService' );

        $testService->run();

        return $this->render( 'default/index.html.twig' );
    }


}