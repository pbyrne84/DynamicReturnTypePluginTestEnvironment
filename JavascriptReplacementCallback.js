function replaceWithJavascriptMask( className, methodName, returnTypeNameSpace, returnTypeClass ) {
    return "Test_" + returnTypeClass + "_Model";
}


function replaceWithJavasctriptAliasing( className, methodName, returnTypeNameSpace, returnTypeClass ){
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


}