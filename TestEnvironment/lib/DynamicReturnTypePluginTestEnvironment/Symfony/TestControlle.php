<?php
use DynamicReturnTypePluginTestEnvironment\TestClasses\TestService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller {
    const CLASS_NAME = __CLASS__;


    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction() {
        $serviceBroker = $this->get( 'service_broker' );
        $testService   = $serviceBroker->getServiceWithoutMask( TestService::CLASS_NAME );

        $testService->run();

        return $this->render( 'default/index.html.twig' );
    }
}