//noinspection JSUnusedGlobalSymbols
/**
 * @type{com.ptby.dynamicreturntypeplugin.scripting.api.ExecutingScriptApi}
 */
var api;

//noinspection JSUnusedGlobalSymbols
function arrayToSingleInstance(returnTypeNameSpace, returnTypeClass)
{
	api.writeToEventLog('We got: ' + returnTypeNameSpace + '\\' + returnTypeClass);

	var singleClass = returnTypeClass.replace(/\[\]$/, '');

	var out = returnTypeNameSpace + "\\" + singleClass;

	api.writeToEventLog('Returning: ' + out);

	return out;
}
