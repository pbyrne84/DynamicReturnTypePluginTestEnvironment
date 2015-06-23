<?php

namespace DynamicReturnTypePluginTestEnvironment;


class ArrayAccessChildTest extends ArrayAccessTest {
    const CLASS_NAME = __CLASS__;


    public function test_parentFieldStringArrayAccess(  ) {
        $domDocument = $this->phockito[ '\DomDocument' ];
        $domDocument->saveXml();
    }


    public function test_parentClassReferenceAccess(  ) {
        $domDocument = $this->phockito[ \DomDocument::class ];
        $domDocument->saveXml();
    }



    public function test_parentReturnTypeArrayDeReferencing( ) {
        $this->getPhockito()[ \DomDocument::class ]->saveXML();
    }


    public function test_parentNormalArraysAreLeftAloneField( ){
        foreach ( $this->fileList as $file ) {
            $file->getPath();
        }

        $this->fileList[ 0 ]->getATime();
    }

}