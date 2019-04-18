<?php
/**
 * Created by PhpStorm.
 * User: Pierre Köhler
 * Date: 18.04.2019
 * Time: 13:10
 */

namespace app\modules\core\miscellaneous;



use Yii;

/**
 * Class HelperClass
 * @package app\modules\core\miscellaneous
 */
class HelperClass
{
    /**
     * HelperClass constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param $imagePath
     * @return string
     */
    public function checkImage($imagePath)
    {
        $returnPath = $imagePath;

        if (!is_file($_SERVER['DOCUMENT_ROOT'] . '/' . $imagePath . '.webp')) {
            if (!is_file($_SERVER['DOCUMENT_ROOT'] . '/' . $imagePath . '.png')) {
                $returnPath = Yii::getAlias("@web") . '/images/userAvatar/default';
            }
        }

        return $returnPath;
    }
}