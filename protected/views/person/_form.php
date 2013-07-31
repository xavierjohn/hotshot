<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'person-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

    <div class="ajax-form">
        <div class="row">
            <?php echo CHtml::activeLabel($model, 'fname'); ?>
            <?php
            echo CHtml::activeTextField
                    ($model, 'fname', array
                ('size' => 32, 'maxlength' => 64));
            ?>
            <?php echo CHtml::activeLabel($model, 'lname'); ?>
            <?php
            echo CHtml::activeTextField
                    ($model, 'lname', array
                ('size' => 32, 'maxlength' => 64));
            ?>
        </div>
    </div><!-- form -->
<?php $this->endWidget(); ?>

</div><!-- form -->