<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2017/10/8
 * Time: 9:33
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php

    if(Yii::$app->session->hasFlash('success')){
        echo Yii::$app->session->getFlash('success');
    }

?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model,'name')?>
<?= $form->field($model,'email')?>

<?= Html::submitButton('Submit',['class'=>'btn btn-success']);?>

<?php ActiveForm::end(); ?>
