<h1>Contatti</h1>

<div class="row">

    <!-- COLONNA SX -->
    <div class="col-sm-6">
        <h4>Terme dell&apos;Aspio</h4>
        <p><strong>Cure termali e trattamenti naturali</strong></p>
        <p>
            Via Aspio Terme<br />
            Camerano 60021, Ancona, Italy<br />
            tel. 071 95691<br />
            <a href="mailto:info@termeaspio.it">info@termeaspio.it</a>
        </p>
    </div>

    <!-- COLONNA DX -->
    <div class="col-sm-6">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'ContactsForm',
            'htmlOptions' => array('onSubmit' => 'Contacts.submit();return false;'),
        ));
        ?>

        <div id="<?php echo get_class($model); ?>_Name_div" class="form-group">
            <?php echo Bootstrap::Label($model, 'Name'); ?>
            <?php echo Bootstrap::TextField($model, 'Name', array('placeholder' => 'es. Mario Rossi')); ?>
            <?php echo Bootstrap::ErrorDiv($model, 'Name'); ?>
        </div>
        <div id="<?php echo get_class($model); ?>_Email_div" class="form-group">
            <?php echo Bootstrap::Label($model, 'Email'); ?>
            <?php echo Bootstrap::EmailField($model, 'Email', array('placeholder' => 'es. mario.rossi@gmail.com')); ?>
            <?php echo Bootstrap::ErrorDiv($model, 'Email'); ?>
        </div>
        <div id="<?php echo get_class($model); ?>_Subject_div" class="form-group">
            <?php echo Bootstrap::Label($model, 'Subject'); ?>
            <?php echo Bootstrap::TextField($model, 'Subject', array('placeholder' => 'es. Richiesta di informazioni...')); ?>
            <?php echo Bootstrap::ErrorDiv($model, 'Subject'); ?>
        </div>
        <div id="<?php echo get_class($model); ?>_Message_div" class="form-group">
            <?php echo Bootstrap::Label($model, 'Message'); ?>
            <?php echo Bootstrap::TextareaField($model, 'Message', array('placeholder' => 'es. Vorrei sapere...')); ?>
            <?php echo Bootstrap::ErrorDiv($model, 'Message'); ?>
        </div>

        <?php echo Bootstrap::Button('submit', 'Invia', null, array('block', 'lg', 'primary')); ?>

        <?php echo Bootstrap::FormMessage($model); ?>

        <?php $this->endWidget(); ?>

    </div>

</div>

<div class="row">
    <div class="col-sm-12">

        <iframe style="width: 100%;" scrollwheel="false" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d92569.00792454933!2d13.519483!3d43.527749!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d80b7d308fcfb%3A0xca472f966fd4bac6!2sTerme+Aspio!5e0!3m2!1sit!2sit!4v1405416943973" frameborder="0" height="400"></iframe>

    </div>
</div>