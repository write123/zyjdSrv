<?php
/**
 * @name IndexController
 * @author gw
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class IndexController extends BaseController {

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
		$ret['content'] = $model->selectSample();
		$ret['name'] = GameLibrary::get()->getName();

		ConfigLibrary::get()->load();

		$this->output($ret);
	}
}
