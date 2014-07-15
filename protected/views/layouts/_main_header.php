<header>

    <div class="container">
        <div class="row">

            <div class="col-sm-6 header-left">

                <img class="img-responsive" src="/images/logo_terme_aspio.jpg" alt="logo_terme_aspio" />

            </div>
            <div class="col-sm-6 header-right">

                Contattaci: 071 95691<br />
                <?php echo Html::link('info@termeaspio.it', 'mailto:info@termeaspio.it'); ?>

            </div>

        </div>
    </div>

</header>

<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class=""><a href="/">Home</a></li>
                            <li class="dropdown <?php if (Yii::app()->controller->id == 'servizi') echo 'active'; ?>">
                                <a href=#"" class="dropdown-toggle" data-toggle="dropdown">Servizi <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/servizi">Servizi</a></li>
                                    <li><a href="/servizi/le-cure-termali">Le cure termali</a></li>
                                    <li><a href="/servizi/le-cure-anti-age">Le cure anti-age</a></li>
                                    <li><a href="/servizi/dietologia">Dietologia</a></li>
                                    <li><a href="/servizi/poliambulatorio">Poliambulatorio</a></li>
                                    <li><a href="/servizi/area-benessere">Area benessere</a></li>
                                </ul>
                            </li>
                            <li class="<?php if (Yii::app()->controller->id == 'site' && Yii::app()->controller->action->id == 'listinoPrezzi') echo 'active'; ?>">
                                <a href="/listino-prezzi">Listino prezzi</a>
                            </li>
                            <li class="<?php if (Yii::app()->controller->id == 'site' && Yii::app()->controller->action->id == 'promozioni') echo 'active'; ?>">
                                <a href="/promozioni">Promozioni</a>
                            </li>
                            <li class="<?php if (Yii::app()->controller->id == 'site' && Yii::app()->controller->action->id == 'staffMedico') echo 'active'; ?>">
                                <a href="/staff-medico">Staff medico</a>
                            </li>
                            <li class="<?php if (Yii::app()->controller->id == 'site' && Yii::app()->controller->action->id == 'contatti') echo 'active'; ?>">
                                <a href="/contatti">Contatti</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        </div>
    </div>
</div>