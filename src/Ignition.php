<?php
/**
 * @copyright Copyright (c) PutYourLightsOn
 */

namespace putyourlightson\ignition;

use yii\base\BootstrapInterface;
use yii\base\Module;
use Spatie\Ignition\Ignition as SpatieIgnition;

class Ignition extends Module implements BootstrapInterface
{
    public function bootstrap($app)
    {
        SpatieIgnition::make()->register();
    }
}
