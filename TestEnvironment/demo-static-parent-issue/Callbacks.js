//noinspection JSUnusedGlobalSymbols
/**
 * @type{com.ptby.dynamicreturntypeplugin.scripting.api.ExecutingScriptApi}
 */
var api;

//noinspection JSUnusedGlobalSymbols
function info(returnTypeNameSpace, returnTypeClass)
{
	var out = returnTypeNameSpace + "\\" + returnTypeClass;

	api.writeToEventLog('We got: ' + out);

	return out;
}
