<?php
/**
 * @name IndexController
 * @author gw
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */

class IndexController extends Yaf_Controller_Abstract{

	public $actions = array(
		'item' => 'controllers/actions/item.php'
	);

	public function indexAction() {

//		//1. fetch query
		//GameLibrary::get()->setName($name);
//
//		$get = $this->getRequest()->getQuery("get", "default value");
//
//		//2. fetch model
//		$model = new SampleModel();
//
//		//3. assign
//		$ret['content'] = $model->selectSample();
		//$ret['name'] = GameLibrary::get()->getName();
//
//		foo\config::get()->load();

		$ret['user']['name'] = 'sdfsd';
		$ret['user']['age']  = 20;

		//echo "indexAction</br>";

		Response::get()->setBody($this->_view->render('index/index.phtml', $ret))->toHtml();
	}
}