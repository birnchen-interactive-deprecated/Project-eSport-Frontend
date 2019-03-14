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
 * @property int $rules_id
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
            'rules_id' => Yii::t('app', 'subrule id'),
            'subrule_id' => Yii::t('app', 'subrule id'),
            'name' => Yii::t('app', 'name'),
            'description' => Yii::t('app', 'description')
        ];
    }

    /**
     * @return int
     */
    public function getRulesId()
    {
        return $this->rules_id;
    }

    /**
     * @return int
     */
    public function getSubRulesId()
    {
        return $this->subrule_id;
    }

    /**
     * @return string
     */
    public function getSubRuleName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSubRuleDescription()
    {
        return $this->description;
    }
}