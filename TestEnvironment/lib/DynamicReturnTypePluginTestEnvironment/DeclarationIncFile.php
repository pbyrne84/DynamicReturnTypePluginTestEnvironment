<?php
$phockitoTestCase = new \DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCase();
$DOMDocumentInNonIncludedFile = $phockitoTestCase->mock('\DomDocument');
$DOMDocumentInNonIncludedFile->adoptNode( new DOMNode() );
$MESS = array();
$eeee = $MESS[ "eeee" ];