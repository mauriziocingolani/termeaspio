<?php

/**
 * Description of SiteController
 *
 * @author Maurizio Cingolani
 */
class SiteController extends Controller {

    public function accessRules() {
        return array(
            array('allow',
                'users' => array('*'),
            ),
        );
    }

    /* === Actions === */

    public function actionIndex() {
        $this->addControllerJs('p_index');
        $this->render('index');
    }

    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) :
            if (Yii::app()->request->isAjaxRequest) :
                echo $error['message'];
            else :
                $this->addJs('framework/p_basic');
                $this->render('error', $error);
            endif;
        endif;
    }

    public function actionLanguage($language) {
        Yii::app()->session['language'] = $language;
    }

}

/* End of file SiteController.php */
