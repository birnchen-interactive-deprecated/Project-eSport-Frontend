<?php

namespace app\modules\account;

use Yii;

/**
 * Class Module
 * @package app\modules\account
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->registerTranslations();
    }

    /**
     * Registers the module translations
     */
    public function registerTranslations()
    {
        Yii::$app->i18n->translations['modules/account/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@app/modules/account/messages',
            'fileMap' => [
                'modules/account/account' => 'myAccount.php',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/account/' . $category, $message, $params, $language);
    }
}