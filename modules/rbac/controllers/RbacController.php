<?php
/**
 * Created by PhpStorm.
 * User: Wenk
 * Date: 16.02.2018
 * Time: 12:34
 */

namespace app\modules\rbac\controllers;

use app\components\Constants;
use app\modules\core\models\Permission;
use app\modules\core\models\User;
use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    /**
     * Initializes the rbac roles and permissions.
     */
    public function actionInit()
    {
        $this->initPermissions();
        $this->stdout("[*] Added permissions");
    }

    /**
     * Assigns the role to the given user.
     *
     * @param string $username the username
     * @param string $role the role name
     * @throws \Exception
     */
    public function actionAssignRole($username, $role)
    {
        $user = User::findByUsername($username);
        if (!$user) {
            $this->stderr('Unable to find user ' . $username);
            return;
        }

        $authManager = Yii::$app->getAuthManager();
        $roleObject = $authManager->getRole($role);
        if (!$roleObject) {
            $this->stderr("Unable to find role " . $role . "\n");

            $roles = $authManager->getRoles();
            $this->stderr("The available roles are: \n");
            foreach ($roles as $role) {
                $this->stderr("- " . $role->name . "\n");
            }
            return;
        }

        $authManager->assign($roleObject, $user->getId());
        $this->stdout('Successfully assigned role ' . $role . ' to user ' . $username);
    }

    /**
     * Drops all roles, rules and permissions.
     */
    private function dropRolesAndPermissions()
    {
        $auth = Yii::$app->getAuthManager();
        $auth->removeAllRoles();
        $auth->removeAllRules();
        $auth->removeAllPermissions();
    }

    /**
     * Initializes and creates the permissions.
     */
    private function initPermissions()
    {
        $auth = Yii::$app->getAuthManager();
        $bla = $auth->getPermissions();
        $permissions = Permission::find()->all();
        foreach ($permissions as $permission) {
            if (!array_key_exists($permission->getPermission(), $auth->getPermissions())) {
                $createPermission = $auth->createPermission($permission->getPermission());
                $auth->add($createPermission);
            }
        }
    }
}