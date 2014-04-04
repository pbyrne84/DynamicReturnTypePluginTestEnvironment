//noinspection JSUnusedGlobalSymbols,JSUnusedGlobalSymbols,JSUnusedGlobalSymbols,JSUnusedGlobalSymbols,JSUnusedGlobalSymbols,JSUnusedGlobalSymbols,JSUnusedGlobalSymbols,JSUnusedGlobalSymbols,FunctionWithInconsistentReturnsJS
/**
 * Javascript file to allow completion of com.ptby.dynamicreturntypeplugin.scripting.api.ExecutingScriptApi (JSDoc)
 * http://usejsdoc.org/tags-type.html
 *
 * When an api instance is injected into the rhino script it will replace a null instance so at the top of the script
 * add the following to enable completion :
 *
 * /**
 * * @type{com.ptby.dynamicreturntypeplugin.scripting.api.ExecutingScriptApi}
 * *\/
 *  var api = null;
 */
var com = {
    ptby : {
        dynamicreturntypeplugin : {
            scripting : {
                api : {
                    ExecutingScriptApi          : {
                        /**
                         * @param {String} message
                         */
                        writeToEventLog : function(message) {

                        },
                        /**
                         * @return {com.ptby.dynamicreturntypeplugin.scripting.api.CallableScriptConfiguration}
                         */
                        getCallableScriptConfiguration : function() {

                        }
                        ,
                        /**
                         * @return {com.ptby.dynamicreturntypeplugin.scripting.api.PhpCallReferenceInfo}
                         */
                        getPhpCallReferenceInfo : function() {

                        }
                    },
                    CallableScriptConfiguration : {
                        /**
                         * @return {String}
                         */
                        getFileLocation : function() {

                        },
                        /**
                         * @return {String}
                         */
                        getCode         : function() {

                        },
                        /**
                         * @return {String}
                         */
                        getCall         : function() {

                        }
                    },
                    PhpCallReferenceInfo        : {
                        /**
                         * @return {String}
                         */
                        getJsonConfiguredClass : function() {

                        },
                        /**
                         * @return {String}
                         */
                        getJsConfiguredMethod  : function() {

                        }
                    }
                }
            }
        }
    }
};
