<?php

namespace yii2module\cleaner\admin\helpers;

use common\enums\rbac\PermissionEnum;
use yii2lab\helpers\interfaces\MenuInterface;

class Menu implements MenuInterface {
	
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
