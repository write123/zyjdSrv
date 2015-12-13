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

		if(!$ctl = Tools::getReqParam('ctl'))
			throw new Yaf_Exception_RouterFailed();

		if(!$act = Tools::getReqParam('act'))
			throw new Yaf_Exception_RouterFailed();

		$params = Tools::getReqParam('p');

		if(is_string($params))
			$params = json_decode($params, true);

		if(is_null($params) || !is_array($params))
			$params = array();

		Yaf_Dispatcher::getInstance()->setRequest(new Yaf_Request_Simple('Index', 'Index', $ctl, $act, $params));
	}

	public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {

		//var_dump($request);
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
		Response::get()->render();
	}
}