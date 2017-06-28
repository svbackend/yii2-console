<?php

namespace svbackend\console;

use Yii;

/**
 * Description of Bootstrap
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @since 1.0
 */
class Bootstrap implements \yii\base\BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        Yii::$container->set('yii\console\controllers\MigrateController', 'svbackend\console\MigrateController');
        Yii::$container->set('yii\mongodb\console\controllers\MigrateController', 'svbackend\console\MongodbMigrateController');
    }
}