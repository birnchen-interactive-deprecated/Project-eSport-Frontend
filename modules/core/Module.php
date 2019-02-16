<?php
/**
 * Created by PhpStorm.
 * User: Wenk
 * Date: 09.02.2018
 * Time: 10:59
 */

namespace app\modules\core;

use Yii;

/**
 * Class Module
 * @package app\modules\core
 */
class Module extends \yii\base\Module
{
    /**
     * Initializes the module, sets the default route and registers the module translations
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
        Yii::$app->i18n->translations['modules/core/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@app/modules/core/messages',
            'fileMap' => [
                'modules/core/general' => 'general.php',
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
        return Yii::t('modules/core/' . $category, $message, $params, $language);
    }
}