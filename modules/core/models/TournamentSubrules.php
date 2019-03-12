<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 28.02.2019
 * Time: 13:55
 */

namespace app\modules\core\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Class TournamentSubrules
 * @package app\modules\core\models
 *
 * @property int $subrule_id
 * @property string $name
 * @property string $description
 */
class TournamentSubrules extends ActiveRecord
{
    /**
     * @return array the attribute labels
     */
    public function attributeLabels()
    {
        return [
            'subrule_id' => Yii::t('app', 'subrule id'),
            'name' => Yii::t('app', 'name'),
            'description' => Yii::t('app', 'description')
        ];
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->subrule_id;
    }

    /**
     * @return string
     */
    public function getSubruleName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSubruleDescription()
    {
        return $this->description;
    }
}