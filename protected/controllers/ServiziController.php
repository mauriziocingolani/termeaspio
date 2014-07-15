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
        $this->addJs('framework/p_basic');
        $this->render('index');
    }

    public function actionCureTermali() {
        $this->addJs('framework/p_basic');
        $this->render('index');
    }

    public function actionCureAntiAge() {
        $this->addJs('framework/p_basic');
        $this->render('index');
    }

    public function actionDietologia() {
        $this->addJs('framework/p_basic');
        $this->render('index');
    }

    public function actionPoliambulatorio() {
        $this->addJs('framework/p_basic');
        $this->render('index');
    }

    public function actionAreaBenessere() {
        $this->addJs('framework/p_basic');
        $this->render('index');
    }

}
