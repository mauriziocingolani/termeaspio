<?php

return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Terme dell&#8217;Aspio',
    'language' => null,
    'timeZone' => 'Europe/Rome',
    'preload' => array('log'),
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.components.framework.*',
        'application.components.user.*',
        'application.extensions.bootstrap.*',
        'application.extensions.validators.*',
        'ext.yii-mail.YiiMailMessage',
    ),
    'components' => array(
//        'db' => require(dirname(__FILE__) . '/config_db.php'),
        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CProfileLogRoute',
                    'levels' => '',
                    'enabled' => YII_DEBUG,
                ),
                array(
                    'class' => 'CWebLogRoute',
                    'enabled' => YII_DEBUG,
                ),
            ),
        ),
        'mail' => require(dirname(__FILE__) . '/config_mail.php'),
//        'session' => array(
//            'autoCreateSessionTable' => false,
//            'autoStart' => true,
//            'class' => 'CDbHttpSession',
//            'connectionID' => 'db',
//            'sessionTableName' => 'sessions',
//            'timeout' => 60 * 60 * 24,
//        ),
        'urlManager' => array(
            'class' => 'application.components.framework.UrlManager',
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => require(dirname(__FILE__) . '/config_rules.php'),
        ),
        'user' => array(
            'allowAutoLogin' => false,
            'loginUrl' => '/login',
        ),
    ),
    'params' => require dirname(__FILE__) . '/config_params.php',
);

/* End of file main.php */
