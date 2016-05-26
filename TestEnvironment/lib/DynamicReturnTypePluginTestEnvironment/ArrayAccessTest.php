<?php

namespace DynamicReturnTypePluginTestEnvironment;


use DynamicReturnTypePluginTestEnvironment\OverriddenReturnType\Phockito;
use DynamicReturnTypePluginTestEnvironment\TestClasses\FileList;

class ArrayAccessTest {
    const CLASS_NAME = __CLASS__;

    /** @var  Phockito */
    protected $phockito;

    /**
     * @var FileList
     */
    protected $fileList;


    public function test_variableStringArrayAccess(  ) {
        $phockito = new Phockito();
        $domDocument = $phockito[ '\DomDocument' ];
        $domDocument->saveXML();
    }

    public function test_variableClassReferenceAccess(  ) {
        $phockito = new Phockito();
        $domDocument = $phockito[ \DomDocument::class ];
        $domDocument->saveXml();
    }


    public function test_fieldStringArrayAccess(  ) {
        $domDocument = $this->phockito[ '\DomDocument' ];
        $domDocument->saveXml();
    }


    public function test_fieldClassReferenceAccess(  ) {
        $domDocument = $this->phockito[ \DomDocument::class ];
        $domDocument->saveXml();
    }


    /**
     * @return Phockito
     */
    protected function getPhockito(){
        return $this->phockito;
    }


    public function test_returnTypeArrayDeReferencing( ) {
        $this->getPhockito()[ \DomDocument::class ]->saveXML();
    }


    /**
     * @param \SplFileInfo[] $files
     */
    public function test_normalArraysAreLeftAloneParameter( array $files ){
        foreach ( $files as $file ) {
            $file->getPath();
        }

        $files[ 0 ]->getATime();
    }


    /**
     * @param FileList $files
     */
    public function test_normalArrayObjectsAreLeftAloneParameter( FileList $files ){
        foreach ( $files as $file ) {
            $file->getPath();
        }

        $files[ 0 ]->getPath();
        $files->offsetGet( 0 )
                ->getPath();
    }


    public function test_normalArraysAreLeftAloneField( ){
        foreach ( $this->fileList as $file ) {
            $file->getPath();
        }

        $this->fileList[ 0 ]->getATime();
    }


    public function test_ContainerToContainer_noneChaining(  ) {
        $phockito = $this->phockito[ Phockito::class ];
        $phockito[ \DomDocument::class]->attributes;
    }

    /** Not working yet... */
    public function test_ContainerToContainer_chaining(  ) {
        $domDocument = $this->phockito[ Phockito::class ][ \DomDocument::class];
        $domDocument->attributes;

    }

    /** Not working yet... */
    public function test_ContainerToContainer_chaining2(  ) {
        $domDocument = $this->phockito->mock( Phockito::class )[\DomDocument::class ];
        $domDocument->attributes;
    }
}



