<?php

namespace yii2module\cleaner\controllers;

use woop\extension\console\yii\console\Controller;
use yii2module\cleaner\helpers\ClearHelper;
use woop\extension\console\helpers\Output;
use woop\extension\console\helpers\input\Select;

class DefaultController extends Controller
{
	
	public function actionIndex($option = null)
	{
		$allNames = [
			'web/assets',
			'runtime',
			'runtime/cache',
			'tests/_output',
		];
		$answer = Select::display('Select objects', $allNames, 1);
		$result = ClearHelper::run($answer);
		if($result) {
			Output::items($result, "Clear completed: " . count($result) . " objects");
		} else {
			Output::block("Not fount object for clear!");
		}
	}
	
}
