<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\assign\models\Data */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'create_uid')->textInput() ?>

<!--    --><?//= $form->field($model, 'lived_uid')->textInput() ?>

<!--    --><?//= $form->field($model, 'version')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'range')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'pass')->passwordInput() ?>

<!--    --><?//= $form->field($model, 'created_at')->textInput() ?>

<!--    --><?//= $form->field($model, 'updated_at')->textInput() ?>

<!--    --><?//= $form->field($model, 'lived_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>