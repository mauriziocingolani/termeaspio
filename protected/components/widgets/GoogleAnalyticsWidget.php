<?php

/**
 * Crea un tag <script> con il codice per il collegamento a Google Analytics.
 * I parametri necessari (key e dominio) vanno impostati nel file di configurazione tramite il parametro
 * 'analytics' con lementi 'key' e 'domain'.
 *
 * @author Maurizio Cingolani <mauriziocingolani74@gmail.com>
 * @version 1.0
 */
class GoogleAnalyticsWidget extends CWidget {

    public function run() {
        $this->render('application.components.views.widgets.googleAnalyticsWidget');
    }

}
