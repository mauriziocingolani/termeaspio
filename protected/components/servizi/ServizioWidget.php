<?php

/**
 * Crea un tag <script> con il codice per il collegamento a Google Analytics.
 * I parametri necessari (key e dominio) vanno impostati nel file di configurazione tramite il parametro
 * 'analytics' con lementi 'key' e 'domain'.
 *
 * @author Maurizio Cingolani <mauriziocingolani74@gmail.com>
 * @version 1.0
 */
class ServizioWidget extends CWidget {

    public $image;
    public $title;
    public $link;
    public $message;

    public function init() {
        ob_start();
    }

    public function run() {
        $this->message = ob_get_clean();
        $this->render('application.components.views.servizi.servizioWidget');
    }

}
