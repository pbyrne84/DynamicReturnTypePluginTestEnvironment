//Note to get groovy running groovy-all-2.2.1.jar needs to be copied to the phpstorm lib directory.
//Textmate bundle for phpstorm can be found here https://github.com/textmate/groovy.tmbundle
//Alternatively/optionally groovy programming can be done in Intellij community edition if things get complicated
//and unit testing is required
def replaceWithGroovyMask( String returnTypeNameSpace, String returnTypeClass ) {
    return "Test_" + returnTypeClass + "_Model";
};


def replaceWithGroovyAliasing( String returnTypeNameSpace, String returnTypeClass ){
    if( returnTypeNameSpace == 'Entity' ) {
        if( returnTypeClass == 'User' ) {
            return 'Test_Foo_Model';
        }else if( returnTypeClass == 'Test' ){
            return 'DynamicReturnTypePluginTestEnvironment\\TestClasses\\TestEntity';
        }
    }

    if( returnTypeNameSpace == '' ) {
        return returnTypeClass;

    }

    return returnTypeNameSpace + "\\" + returnTypeClass;
};