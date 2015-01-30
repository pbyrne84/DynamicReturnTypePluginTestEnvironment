<?php
require_once __DIR__ . '/DeclarationIncFile.php';
$DOMDocumentInIncludedFile = $phockitoTestCase->mock('\DomDocument');
$DOMDocumentInIncludedFile->adoptNode( new DOMNode() );