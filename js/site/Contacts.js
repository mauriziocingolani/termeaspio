var Contacts = {
    form: null,
    init: function() {
        this.form = new Form('ContactsForm', true);
    },
    submit: function() {
        if (this.form.validate()) {
            new AjaxRequest('site', 'sendContactEmail', this.form.message, 'Invio messaggio', {
                params: {
                    Name: this.form.getFieldValue('Name'),
                    Email: this.form.getFieldValue('Email'),
                    Subject: this.form.getFieldValue('Subject'),
                    Message: this.form.getFieldValue('Message'),
                    SecurityField: this.form.getFieldValue('SecurityField')
                },
                onSuccess: function(json, errorDiv) {
                    Message.showOverJson(errorDiv, json);
                }
            });
        }
    }
}