<?php

/**
 * @copyright Copyright (c) 2018 Carsten Brandt <mail@ramprasadm1986.cc> and contributors
 * @license https://github.com/ramprasadm1986/yii2-openapi/blob/master/LICENSE
 */

namespace ramprasadm1986\yii2openapi\assets;

use yii\web\AssetBundle;

/**
 * This asset adds CSS style for bootstrap "card" component
 */
class BootstrapCardAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/css';
    public $css = [
        'bootstrap-card.css',
    ];
}
