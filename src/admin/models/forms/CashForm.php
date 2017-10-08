<?php
namespace yii2module\cleaner\admin\models\forms;

use Yii;
use yii2lab\misc\yii\base\Model;
use yii\helpers\FileHelper;

/**
 * Cash form
 */
class CashForm extends Model
{
	public $backend_app = false;
	public $frontend_app = false;
	public $api_app = false;

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			['backend_app', 'boolean'],
			['frontend_app', 'boolean'],
			['api_app', 'boolean'],
		];
	}

	/*
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'backend_app' 		=> t('cleaner/cache', 'backend_app'),
			'frontend_app' 	=> t('cleaner/cache', 'frontend_app'),
			'api_app' 	=> t('cleaner/cache', 'api_app'),
		];
	}

}
