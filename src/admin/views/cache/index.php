<?php
use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii2lab\widgets\SwitchInput;
use yii2module\cleaner\admin\models\forms\CashForm;

/* @var $model CashForm */

$this->title = t('cleaner/cache','title');

?>

<div class="box box-primary">
	<?php $form = ActiveForm::begin([
		'options' => ['class' => 'form-vertical'],
	]);?>
		<div class="box-body">
			<?/* = Alert::widget([
				'delay' => 5000,
			]); */?>

			<?= $form->field($model, 'backend_app')->widget(SwitchInput::classname(), SwitchInput::yesNoConfig());?>
			<?= $form->field($model, 'frontend_app')->widget(SwitchInput::classname(), SwitchInput::yesNoConfig());?>
			<?= $form->field($model, 'api_app')->widget(SwitchInput::classname(), SwitchInput::yesNoConfig());?>
		</div>
		<div class="box-footer">
			<?= Html::submitButton('<i class="fa fa-trash-o"></i> '.t('main','clear'), ['class' => 'btn btn-danger', 'name' => 'clear-button']);?>
		</div>
	<?php ActiveForm::end(); ?>
</div>
