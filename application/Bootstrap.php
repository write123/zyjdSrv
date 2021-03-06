<?php
/**
 * @name Bootstrap
 * @author gw
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf_Bootstrap_Abstract{

	private $config;

    public function _initConfig() {
		//把配置保存起来
		$this->config = Yaf_Application::app()->getConfig();
		Yaf_Registry::set('config', $this->config);
	}

	public function _initLoader(Yaf_Dispatcher $dispatcher)
	{
		Yaf_Loader::getInstance()->registerLocalNamespace('Common');
	}

	public function _initPlugin(Yaf_Dispatcher $dispatcher) {
		//注册一个插件
		$systemPlugin = new SystemPlugin();
		$dispatcher->registerPlugin($systemPlugin);
	}

	public function _initRoute(Yaf_Dispatcher $dispatcher) {

		//在这里注册自己的路由协议,默认使用简单路由
	}

	public function _initView(Yaf_Dispatcher $dispatcher)
	{
		$dispatcher->disableView();
	}
}
