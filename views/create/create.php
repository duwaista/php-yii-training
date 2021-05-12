<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<? $form = ActiveForm::begin(['action' => '?r=create/create', 'id' => 'forum_post', 'method' => 'post',]) ?>
    <input type="text" name="email"/>
    <button type="submit">Post</button>
<? ActiveForm::end(); ?>