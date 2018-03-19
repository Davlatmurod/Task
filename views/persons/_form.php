<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Companies;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Persons */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persons-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'person_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'person_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_id')->dropDownList(
            Arrayhelper::map(Companies::find()->all(),"id","company_name"),["prompt"=>"Select person's company name"]
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
