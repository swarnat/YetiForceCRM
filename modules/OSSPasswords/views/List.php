<?php
/* OpenSaaS 
* Rules: http://opensaas.pl/rules.html
*/
class OSSPasswords_List_View extends Vtiger_List_View {	
	/**
	 * Function to get the list of Script models to be included
	 * @param Vtiger_Request $request
	 * @return <Array> - List of Vtiger_JsScript_Model instances
	 */
	function getHeaderScripts(Vtiger_Request $request) {
		$headerScriptInstances = parent::getHeaderScripts($request);
		$moduleName = $request->getModule();

		$jsFileNames = array(
            'layouts.vlayout.modules.OSSPasswords.resources.ZeroClipboard',
            'layouts.vlayout.modules.OSSPasswords.resources.showRelatedModulePass',
		);

		$jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
		$headerScriptInstances = array_merge($headerScriptInstances, $jsScriptInstances);
		return $headerScriptInstances;
	}
}