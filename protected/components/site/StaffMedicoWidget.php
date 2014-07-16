<?php

/**
 * Description of StaffMedicoWidget
 *
 * @author Maurizio Cingolani <mauriziocingolani74@gmail.com>
 */
class StaffMedicoWidget extends CWidget {

    public $image;
    public $name;
    public $linkedin;
    public $text;

    public function init() {
        ob_start();
    }

    public function run() {
        $this->text = ob_get_clean();
        $this->render('application.components.views.site.staffMedicoWidget');
    }

}
