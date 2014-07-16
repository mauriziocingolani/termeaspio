<?php

/**
 * Description of ContactsForm
 *
 * @author Maurizio Cingolani <mauriziocingolani74@gmail.com>
 */
class ContactsForm extends CFormModel {

    public $Name;
    public $Email;
    public $Subject;
    public $Message;

    public function attributeLabels() {
        return array(
            'Name' => 'Nome e cognome',
            'Subject' => 'Oggetto',
            'Message' => 'Messaggio',
        );
    }

    public function rules() {
        return array(
            array('Name', 'required', 'message' => 'Inserisci il tuo nome e cognome'),
            array('Email', 'required', 'message' => 'Inserisci il tuo indirizzo email'),
            array('Email', 'EmailValidator', 'message' => 'Indirizzo email non valido'),
            array('Subject', 'required', 'message' => 'Inserisci l\'oggetto della richiesta'),
            array('Message', 'required', 'message' => 'Inserisci il messaggio'),
        );
    }

}
