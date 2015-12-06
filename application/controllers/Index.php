<?php
/**
 * @name IndexController
 * @author gw
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class IndexController extends Yaf_Controller_Abstract {

	/**
	 * @param string $name
	 * @param int $age
	 * @return bool
	 */
	public function indexAction(string $name, int $age) {
		//1. fetch query
		GameLibrary::get()->setName($name);

		$get = $this->getRequest()->getQuery("get", "default value");

		//2. fetch model
		$model = new SampleModel();

		//3. assign
		$this->getView()->assign("content", $model->selectSample());
		$this->getView()->assign("name", GameLibrary::get()->getName());

		$ret['name'] = GameLibrary::get()->getName();
		$this->getResponse()->appendBody(json_encode($ret));
		//4. render by Yaf, 如果这里返回FALSE, Yaf将不会调用自动视图引擎Render模板
        return false;
	}
}
