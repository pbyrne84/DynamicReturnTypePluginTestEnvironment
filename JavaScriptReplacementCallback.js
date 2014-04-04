//noinspection JSUnusedGlobalSymbols
/**
 * @type{com.ptby.dynamicreturntypeplugin.scripting.api.ExecutingScriptApi}
 */
var api = null;

//noinspection JSUnusedGlobalSymbols
function replaceWithJavaScriptMask(  returnTypeNameSpace, returnTypeClass ) {
    return "Test_" + returnTypeClass + "_Model";
}


//noinspection JSUnusedGlobalSymbols
function replaceWithJavaScriptAliasing( returnTypeNameSpace, returnTypeClass  ){
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