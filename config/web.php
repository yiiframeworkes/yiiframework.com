<?php

$params = array_merge(
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$config = [
    'id' => 'yiiframework.com',
    'basePath' => dirname(__DIR__),
    'bootstrap' => [
        'log',
        app\components\BootstrapEvents::class
    ],
    'language' => 'es',
    'components' => [
        'db' => $params['components.db'],
        'elasticsearch' => $params['components.elasticsearch'],
        'cache' => $params['components.cache'],
        'mailer' => $params['components.mailer'],
        'user' => [
            'identityClass' => app\models\User::class,
            'enableAutoLogin' => true,
            'loginUrl' => ['auth/login'],
        ],
        'formatter' => [
            'class' => app\components\Formatter::class,
            'thousandSeparator' => '&thinsp;',
        ],

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => false,
                'yii\validators\ValidationAsset' => false,
                'yii\web\YiiAsset' => false,
                'yii\widgets\ActiveFormAsset' => false,
                'yii\bootstrap\BootstrapPluginAsset' => false,
                'yii\web\JqueryAsset' => false,
                'dosamigos\selectize\SelectizeAsset' => [
                    'depends' => [
                        \app\assets\AppAsset::class,
                    ],
                ],
                'yii\jui\JuiAsset' => [
                    'depends' => [
                        \app\assets\AppAsset::class,
                    ],
                ],
                'yii\grid\GridViewAsset' => [
                    'depends' => [
                        \app\assets\AppAsset::class,
                    ],
                ],
                //'yii\authclient\widgets\AuthChoiceAsset' => false, //authchoice.js
                //'yii\authclient\widgets\AuthChoiceStyleAsset' => false, //authchoice.css
            ],
            'linkAssets' => true,
            'appendTimestamp' => true,
        ],
        'urlManager' => $params['components.urlManager'],
        'authManager' => [
            'class' => yii\rbac\PhpManager::class,
            'itemFile' => '@app/config/rbac/items.php',
            'assignmentFile' => '@app/config/rbac/assignments.php',
            'ruleFile' => '@app/rbac/rules.php',
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => $params['authclients'],
        ],
    ],
    'params' => $params,

    // URLs with trailing slashes should be redirected to URLs without trailig slashes
    'on beforeRequest' => function () {
        $pathInfo = Yii::$app->request->pathInfo;
        $query = Yii::$app->request->queryString;
        if (!empty($pathInfo) && substr($pathInfo, -1) === '/') {
            $url = Yii::$app->request->baseUrl . '/' . substr($pathInfo, 0, -1);
            if ($query) {
                $url .= '?' . $query;
            }
            Yii::$app->response->redirect($url, YII_DEBUG ? 302 : 301);
            Yii::$app->end();
        }
    },
];

return $config;
