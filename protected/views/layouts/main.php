<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta name="description" content="<?php echo Html::encode(Yii::app()->params['description']); ?>">
        <meta name="author" content="<?php echo Html::encode(Yii::app()->params['author']); ?>">
        
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />

        <?php $this->css(); ?>
        <?php $this->js(); ?>

        <title><?php echo Html::encode(Yii::app()->params['title']); ?></title>

    </head>

    <body>

        <div id = "preloader">
            <div id = "status">&nbsp;</div>
        </div>

        <?php $this->widget('application.components.widgets.ModalDialogWidget'); ?>

        <!-- === HEADER === -->
        <?php $this->renderPartial('//layouts/_main_header'); ?>

        <div class="container">

            <!-- === CONTENUTO PRINCIPALE === -->
            <?php echo $content; ?>

        </div>

        <!-- === FOOTER === -->
        <?php $this->renderPartial('//layouts/_main_footer'); ?>

        <!-- Google Analytics --->

        <?php $this->widget('application.components.widgets.GoogleAnalyticsWidget'); ?>

    </body>

</html>
