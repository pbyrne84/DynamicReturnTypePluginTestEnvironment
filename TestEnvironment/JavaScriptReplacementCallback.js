//noinspection JSUnusedGlobalSymbols
/**
 * @type{com.ptby.dynamicreturntypeplugin.scripting.api.ExecutingScriptApi}
 */
var api;


//noinspection JSUnusedGlobalSymbols
function replaceWithJavaScriptMask(  returnTypeNameSpace, returnTypeClass ) {
    return "Test_" + returnTypeClass + "_Model";
}


//noinspection JSUnusedGlobalSymbols
function replaceWithJavaScriptAliasing( returnTypeNameSpace, returnTypeClass  ){
    api.writeToEventLog( "returnTypeNameSpace " +  returnTypeNameSpace);
    api.writeToEventLog( "returnTypeClass " + returnTypeClass);

    if( returnTypeClass == "xxxxxxx" ){
        return 'DomDocument';
    }


    if( returnTypeNameSpace == 'Entity' ) {
        if( returnTypeClass == 'User' ) {
            return 'Test_Foo_Model';
        }else if( returnTypeClass == 'Test' ){
            return 'DynamicReturnTypePluginTestEnvironment\\TestClasses\\TestEntity[]';
        }
    }

    if( returnTypeNameSpace == '' ) {
        return returnTypeClass;

    }

    return returnTypeNameSpace + "\\" + returnTypeClass;


}