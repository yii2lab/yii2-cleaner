Чистка (cleaner)
===

## Описание

Чистка кешей и мусора.

## Установка

Устанавливаем зависимость:

```
composer require yii2module/yii2-cleaner
```

Объявляем модуль:

```php
return [
	'modules' => [
		// ...
		'fixtures' => 'yii2module\fixture\Module',
		// ...
	],
];
```

## Документация

Чистка временных файлов и кэшей.

* runtime
* web/assets
* runtime/cache
* tests/_output

Вызывается командой:

```
php yii cleaner
```

Будет предложено выбрать места, которые нужно почистить.