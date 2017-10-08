<?php
namespace yii2module\cleaner\admin\controllers;

use Yii;
use yii\web\Controller;
use yii2module\cleaner\admin\models\forms\CashForm;
use yii2module\cleaner\admin\models\Cash;
use yii2lab\notify\widgets\Alert;

class CacheController extends Controller
{
	/**
	 * @inheritdoc
	 */
	public function actionIndex()
	{
		$form = new CashForm();
		$model = new Cash();
		if(Yii::$app->request->getIsPost()){
			$success = false;
			if ($form->load(Yii::$app->request->post()) && $form->validate()) {
				if ($form->backend_app) {
					$model->clearCash('backend');
					$success = true;
				}

				if ($form->frontend_app) {
					$model->clearCash('frontend');
					$success = true;
				}
				
				if ($form->api_app) {
					$model->clearCash('api');
					$success = true;
				}
				if ($success) {
					Yii::$app->notify->flash->send(['cleaner/cache', 'cache_successfully_flushed'], Alert::TYPE_SUCCESS);
				} else {
					Yii::$app->notify->flash->send(['cleaner/cache', 'select_cache_section_to_flush'], Alert::TYPE_DANGER);
				}
				return $this->refresh();
			}
		}
		return $this->render('index', [
			'model' => $form,
		]);
	}
}

