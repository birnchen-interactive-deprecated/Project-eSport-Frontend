<?php

/* @var $this yii\web\View *
 * @var $form yii\bootstrap\ActiveForm
 * @var $genderList array
 * @var $languageList array
 * @var $nationalityList array
 * @var $model app\models\LoginForm
 */

use kartik\date\DatePicker;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'Registrieren';
?>
<div class="site-login">
    <h1 class="col-lg-offset-1"><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'username')->textInput() ?>

    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'passwordRepeat')->passwordInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'genderId')->dropDownList($genderList) ?>
    <?= $form->field($model, 'languageId')->dropDownList($languageList) ?>
    <?= $form->field($model, 'nationalityId')->dropDownList($nationalityList) ?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Registrieren', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
