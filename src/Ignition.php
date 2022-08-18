<?php
/**
 * @copyright Copyright (c) PutYourLightsOn
 */

namespace putyourlightson\ignition;

use Craft;
use craft\web\Application;
use yii\base\BootstrapInterface;
use yii\base\Module;
use Spatie\Ignition\Ignition as SpatieIgnition;

class Ignition extends Module implements BootstrapInterface
{
    public function bootstrap($app)
    {
        if ($app instanceof Application) {
            SpatieIgnition::make()
                ->applicationPath(CRAFT_BASE_PATH)
                ->shouldDisplayException(Craft::$app->config->general->devMode)
                ->register();
        }
    }
}
