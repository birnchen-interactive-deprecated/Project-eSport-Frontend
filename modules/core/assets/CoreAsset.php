<?php

namespace app\modules\core\assets;

use yii\web\AssetBundle;

class CoreAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/core/assets';

    public $js = [
        'core.js'
    ];

    public $css = [
        'core.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
