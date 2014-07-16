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

    public function actionListinoPrezzi() {
        $this->addCss('listinoPrezzi');
        $this->addControllerJs('p_index');
        $this->render('listinoPrezzi');
    }

    public function actionPromozioni() {
        $this->addCss('promozioni');
        $this->addControllerJs('p_index');
        $this->render('promozioni');
    }

    public function actionStaffMedico() {
        $this->addCss('staffMedico');
        $this->addControllerJs('p_index');
        $this->render('staffMedico');
    }

    public function actionContatti() {
        $this->addCss('contatti');
        $this->addControllerJs('p_index');
        $this->render('contatti');
    }

    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) :
            if (Yii::app()->request->isAjaxRequest) :
                echo $error['message'];
            else :
                $this->addControllerJs('p_index');
                $this->render('error', $error);
            endif;
        endif;
    }

    public function actionLanguage($language) {
        Yii::app()->session['language'] = $language;
    }

}

/* End of file SiteController.php */
