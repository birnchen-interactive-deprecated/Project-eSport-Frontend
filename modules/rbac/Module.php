<?php

namespace app\modules\rbac;

use Yii;

/**
 * Class Module
 * @package app\modules\rbac
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->defaultRoute = 'rbac/index';
        $this->registerTranslations();
    }

    /**
     * Registers the module translations
     */
    public function registerTranslations()
    {
        Yii::$app->i18n->translations['modules/rbac/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@app/modules/rbac/messages',
            'fileMap' => [
                'modules/rbac/rbac' => 'rbac.php',
            ],
        ];
    }

    /**
     * Translates a message to the specified language.
     *
     * @param string $category the message category.
     * @param string $message the message to be translated.
     * @param array $params the parameters that will be used to replace the corresponding placeholders in the message.
     * @param string $language the language code (e.g. `en-US`, `en`). If this is null, the current
     * [[\yii\base\Application::language|application language]] will be used.
     * @return string the translated message.
     */
    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/rbac/' . $category, $message, $params, $language);
    }
}