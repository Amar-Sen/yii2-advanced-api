<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;

use Yii;

use common\models\User;

use yii\filters\auth\HttpBasicAuth;

class UserController extends ActiveController
{
	public $modelClass='common\models\User';

	public function behaviors()
	{
		$behaviors = parent::behaviors();
    		$behaviors['authenticator'] = [
        	'class' => HttpBasicAuth::className(),
            'auth' => function ($username, $password) {
                /** @var User $user */
                $user = User::findByUsername($username);
                if ($user && $user->validatePassword($password)) {
                    return $user;
                }
            }
    	];
    	return $behaviors;
	}
}
