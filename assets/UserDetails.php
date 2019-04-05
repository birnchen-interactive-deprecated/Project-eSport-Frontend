<?php
/**
 * Created by PhpStorm.
 * User: Pierre Köhler
 * Date: 05.04.2019
 * Time: 08:31
 */

namespace app\assets;

use yii\web\AssetBundle;

class UserDetails extends AssetBundle
{
    public $basePath = '@webroot/user/details';
    public $baseUrl = '@web';

    public $css = [
        'css/accountOverview.css',
    ];

    public $js = [
    ];
}