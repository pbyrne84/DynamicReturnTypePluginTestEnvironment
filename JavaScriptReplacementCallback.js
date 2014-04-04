//com.ptby.dynamicreturntypeplugin.scripting.api.ExecutingScriptApi
var api;

function replaceWithJavaScriptMask(  returnTypeNameSpace, returnTypeClass, className, methodName ) {
    return "Test_" + returnTypeClass + "_Model";
}


function replaceWithJavaScriptAliasing( returnTypeNameSpace, returnTypeClass, className, methodName  ){
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