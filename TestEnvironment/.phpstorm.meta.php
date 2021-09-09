<?php declare( strict_types=1 );

namespace PHPSTORM_META;

use DynamicReturnTypePluginTestEnvironment\MaskedStringParameterTest;
use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\Phockito;
use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\PhockitoTestCase;

//Handle passing of types to instances and static methods
override( PhockitoTestCase::mock( 0 ), type( 0 ) );
override( Phockito::mock( 0 ), type( 0 ) );
override( PhockitoTestCase::verify( 0 ), type( 0 ) );

//Handle passing of strings to instances and static methods
override( PhockitoTestCase::mock( 0 ), map( [ '' => '@' ] ) );
override( Phockito::mock( 0 ), map( [ '' => '@' ] ) );
override( PhockitoTestCase::verify( 0 ), map( [ '' => '@' ] ) );

//Handle masks to instances and static methods
override( Phockito::maskMock( 0 ), map( [ '' => 'Test_@_Model' ] ) );
override( PhockitoTestCase::parentMaskMock( 0 ), map( [ '' => 'Test_@_Model' ] ) );
override( MaskedStringParameterTest::localMaskMock( 0 ), map( [ '' => 'Test_@_Model' ] ) );
override( \maskMock( 0 ), map( [ '' => 'Test_@_Model' ] ) );


// passing a string and getting a list of strings does not seem to work? Or the syntax is hidden?
override( PhockitoTestCase::parentMaskMockList( 0 ), map( [ '' => '@[]' ] ) );