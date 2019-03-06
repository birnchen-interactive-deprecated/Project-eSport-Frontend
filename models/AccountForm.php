<?php
/**
 * Created by PhpStorm.
 * User: Birnchen Studios
 * Date: 06.03.2019
 * Time: 11:22
 */

namespace app\models;

use app\modules\core\models\User;
use Yii;
use yii\base\Model;

/**
 * AccountForm is the model behind the Account Form.
 *
 * @property User|null $user This property is read and write.
 *
 */
class AccountForm extends Model
{
    public $username;
}