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
        $this->addControllerJs(array('Contacts', 'p_contacts'));
        $this->render('contatti', array(
            'model' => new ContactsForm,
        ));
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

    /* === AJAX === */

    public function actionSendContactEmail() {
        $return = new AjaxReturnObject;
        $message = new YiiMailMessage;
        $message->view = 'contactMessage';
        $message->subject = 'TERME DELL\'ASPIO - Richiesta contatto';
        $message->addTo(Yii::app()->params['contactEmail']);
        $d = new stdClass();
        $d->Name = Yii::app()->request->getPost('Name');
        $d->Email = Yii::app()->request->getPost('Email');
        $d->Subject = Yii::app()->request->getPost('Subject');
        $d->Message = Yii::app()->request->getPost('Message');
        $message->setBody(array(
            'data' => $d,
                ), 'text/html');
        $message->from = 'webmaster@ggfgroup.net';
        if (Yii::app()->mail->send($message) === 0) :
            $return->setErrorMessage('Impossible inviare il messaggio.');
        else :
            $return->setSuccessMessage('Il messaggio &egrave; stato inviato correttamente.');
        endif;
        echo json_encode($return);
    }

}

/* End of file SiteController.php */
