<?php

namespace yii2module\cleaner\admin\helpers;

// todo: отрефакторить - сделать нормальный интерфейс и родителя

use common\enums\rbac\PermissionEnum;

class Menu {
	
	static function getMenu() {
		return [
			'label' => ['cleaner/cache', 'cache'],
			'url' => 'cleaner/cache',
			'module' => 'cleaner',
			//'icon' => 'trash-o',
			'access' => PermissionEnum::CLEANER_MANAGE,
		];
	}

}
