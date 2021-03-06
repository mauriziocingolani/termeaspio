<h1>Servizi</h1>

<div class="row">

    <div class="col-sm-6">
        <?php
        $this->beginWidget('application.components.servizi.ServizioWidget', array(
            'image' => '/images/servizi/cure-termali.png',
            'title' => 'Le cure termali',
            'link' => '/servizi/le-cure-termali',
        ));
        ?>
        Il poliambulatorio delle Terme dell&#8217;Aspio dispone di avanzate tecnologie 
        che intensificano gli effetti benefici delle acque termali.
        <?php $this->endWidget(); ?>
    </div>

    <div class="col-sm-6">
        <?php
        $this->beginWidget('application.components.servizi.ServizioWidget', array(
            'image' => '/images/servizi/cure-anti-aging.png',
            'title' => 'Le cure anti-aging',
            'link' => '/servizi/le-cure-anti-aging',
        ));
        ?>
        Insieme di terapie naturali e termali volte al ridimensionamento della carica patologica dei radicali liberi
        e dei fattori che accelerano i processi d&#8217;invecchiamento della cute, delle arterie e degli organi
        bersaglio (cuore, cervello, reni).
        <?php $this->endWidget(); ?>
    </div>

</div>

<div class="row">

    <div class="col-sm-6">
        <?php
        $this->beginWidget('application.components.servizi.ServizioWidget', array(
            'image' => '/images/servizi/dietologia.png',
            'title' => 'Dietologia',
            'link' => '/servizi/dietologia',
        ));
        ?>
        Visite specialistiche atte ad identificare il corretto fabbisogno alimentare del singolo paziente 
        in relazione alla propria costituzione, metabolismo e patologie in atto.
        <?php $this->endWidget(); ?>
    </div>

    <div class="col-sm-6">
        <?php
        $this->beginWidget('application.components.servizi.ServizioWidget', array(
            'image' => '/images/servizi/poliambulatorio.png',
            'title' => 'Poliambulatorio',
            'link' => '/servizi/poliambulatorio',
        ));
        ?>
        Ambulatorio di Cardiologia dove vengono eseguite prestazioni di visita cardiologica, 
        elettrocardiogramma e holter pressione arteriosa 24 ore.
        <?php $this->endWidget(); ?>
    </div>

</div>

<div class="row">

    <div class="col-sm-6">
        <?php
        $this->beginWidget('application.components.servizi.ServizioWidget', array(
            'image' => '/images/servizi/area-benessere.png',
            'title' => 'Area benessere',
            'link' => '/servizi/area-benessere',
        ));
        ?>
        L&#8217;ambulatorio di psicologia del Benessere &egrave; dedicato alla realizzazione di percorsi
        psicologici che riguardano la conoscenza approfondita di s&eacute; e del proprio corpo.
        <?php $this->endWidget(); ?>
    </div>

</div>


