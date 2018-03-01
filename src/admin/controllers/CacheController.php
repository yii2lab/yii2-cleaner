<?php
namespace yii2module\cleaner\admin\controllers;

use common\enums\app\AppEnum;
use Yii;
use yii\web\Controller;
use yii2lab\validator\DynamicModel;
use yii2module\cleaner\admin\models\Cash;
use yii2lab\notify\domain\widgets\Alert;

class CacheController extends Controller
{
	/**
	 * @inheritdoc
	 */
	public function actionIndex()
	{
		$form = new DynamicModel();
		if(Yii::$app->request->getIsPost()){
			$success = false;
			$form->load(Yii::$app->request->post('DynamicModel'), 'DynamicModel');
			$post = Yii::$app->request->post('DynamicModel');
			$model = new Cash();
			foreach(AppEnum::all() as $app) {
				if(!empty($post[$app])) {
					$model->clearCash($app);
					$success = true;
				}
			}
			if ($success) {
				Yii::$app->navigation->alert->create(['cleaner/cache', 'cache_successfully_flushed'], Alert::TYPE_SUCCESS);
			} else {
				Yii::$app->navigation->alert->create(['cleaner/cache', 'select_cache_section_to_flush'], Alert::TYPE_DANGER);
			}
			return $this->refresh();
		}
		return $this->render('index', [
			'model' => $form,
		]);
	}
}

