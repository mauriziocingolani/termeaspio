<?php

/**
 * Description of ServiziController
 *
 * @author Maurizio Cingolani <mauriziocingolani74@gmail.com>
 */
class ServiziController extends Controller {

    public function accessRules() {
        return array(
            array('allow',
                'users' => array('*'),
            ),
        );
    }

    /* === Actions === */

    public function actionIndex() {
        $this->addCss('servizi');
        $this->addJs('framework/p_basic');
        $this->render('index');
    }

    public function actionCureTermali() {
        $this->addJs('framework/p_basic');
        $this->render('cureTermali');
    }

    public function actionCureAntiAging() {
        $this->addJs('framework/p_basic');
        $this->render('cureAntiAging');
    }

    public function actionDietologia() {
        $this->addJs('framework/p_basic');
        $this->render('dietologia');
    }

    public function actionPoliambulatorio() {
        $this->addJs('framework/p_basic');
        $this->render('poliambulatorio');
    }

    public function actionAreaBenessere() {
        $this->addJs('framework/p_basic');
        $this->render('areaBenessere');
    }

}
