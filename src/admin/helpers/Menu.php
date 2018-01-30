<?php

namespace yii2module\cleaner\admin\helpers;

use common\enums\rbac\PermissionEnum;

class Menu {
	
	public function toArray() {
		return [
			'label' => ['cleaner/cache', 'cache'],
			'url' => 'cleaner/cache',
			'module' => 'cleaner',
			//'icon' => 'trash-o',
			'access' => PermissionEnum::CLEANER_MANAGE,
		];
	}

}
