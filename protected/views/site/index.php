<?php
/**
 * @property SiteController $this
 */
?>

<?php if (false && !isset(Yii::app()->request->cookies['popup'])) : ?>

    <div id="modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">&nbsp;</h4>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <img src="/images/logo_terme_aspio.png" alt="" class="img-responsive" style="margin: 0 auto;margin-bottom: 25px;width: 250px;" />
                    <p style="font-size: 20px;">Le <strong>attivit&agrave; ambulatoriali</strong> riprenderanno dal 18 febbraio 2015<br />
                        nei giorni di marted&igrave; e gioved&igrave;, dalle 14:30 alle 18:00.</p>
                    <p style="font-size: 20px;">Le <strong>cure inalatorie</strong> riprenderanno invece<br /> dal mese di maggio 2015.</p>
                </div>
                <div class="modal-footer" style="text-align: center;">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                </div>
            </div>
        </div>
    </div> 

<?php endif; ?>

<?php
//$cookie = new CHttpCookie('popup', true);
//$cookie->expire = time() + 60 * 30;
//Yii::app()->request->cookies['popup'] = $cookie;
?>

<div class="row">
    <div class="col-sm-12">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators" style="color: black;">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/images/servizi/cure-termali.png" alt="cure-termali">
                </div>
                <div class="item">
                    <img src="/images/servizi/cure-anti-aging.png" alt="cure-anti-aging">
                </div>
                <div class="item">
                    <img src="/images/servizi/dietologia.png" alt="dietologia">
                </div>
                <div class="item">
                    <img src="/images/servizi/poliambulatorio.png" alt="poliambulatorio">
                </div>
                <div class="item">
                    <img src="/images/servizi/area-benessere.png" alt="area-benessere">
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>

    </div>
</div>

<div class="termeaspio">
    <div class="col-sm-12 text">
        Le Terme dell&#8217;Aspio si trovano nei pressi del Monte Conero in un&#8217;area che invita
        alla scoperta e al relax. Dispongono di un&#8217;equipe medica in grado di seguire i pazienti 
        affetti da diverse patologie mediante l&#8217;utilizzo delle acque termali e con l&#8217;ausilio
        delle pi&ugrave; moderne tecnologie, in un ambiente ideale per il benessere fisico e mentale.
    </div>
</div>