<?php
/**
 * @name SamplePlugin
 * @desc Yaf定义了如下的6个Hook,插件之间的执行顺序是先进先Call
 * @see http://www.php.net/manual/en/class.yaf-plugin-abstract.php
 * @author gw
 */
class SystemPlugin extends Yaf_Plugin_Abstract {

	public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {

		//echo "routerStartup</br>";
	}

	public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {

		$router = Yaf_Dispatcher::getInstance()->getRouter();
		//echo $router->getCurrentRoute();
		var_dump($router);
		//echo "routerShutdown</br>";
	}

	public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
		//echo 'dispatchLoopStartup</br>';
	}

	public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
		//echo 'preDispatch</br>';
	}

	public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
		//echo 'postDispatch</br>';
	}

	public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
		//Response_Json::get()->send();
		var_dump($request);

		exit;
	}
}
