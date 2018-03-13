<?php 
namespace api\modules\v1\controllers;

use yii\rest\ActiveController;

use Yii;

// use yii\filters\auth\HttpBasicAuth;

/**
 * Country Controller API
 *
 */
class CountryController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Country';

    public function behaviors()
    {
    	// $behaviors = parent::behaviors();
    	// 	$behaviors['authenticator'] = [
     //    	'class' => HttpBasicAuth::className(),
     //        'auth' => function ($username, $password) {
     //            /** @var User $user */
     //            $user = User::findByUsername($username);
     //            if ($user && $user->validatePassword($password)) {
     //                return $user;
     //            }
     //        }
    	// ];
    	// return $behaviors;
        return [
            [
                'class' => \yii\filters\ContentNegotiator::className(),
                'formats' => [
                    'application/json' => \yii\web\Response::FORMAT_JSON,
                ],
            ],
        ];
        // $behaviors = parent::behaviors();
        // $behaviors['access'] = [
        //     'class' => AccessControl::className(),
        //     'only' => ['login'],
        //     'rules' => [
        //         [
        //             'actions' => ['login'],
        //             'allow' => true,
        //             'roles' => ['@'],
        //         ],
        //     ],
        // ];
        // $behaviors['authenticator'] = [
        //    'class' => HttpBasicAuth::className(),
        // ];
        // $behaviors['contentNegotiator'] = [
        //     'class' => \yii\filters\ContentNegotiator::className(),
        //     'formats' => [
        //         'application/json' => Response::FORMAT_JSON,
        //     ],
        // ];
        // return $behaviors;
    }
 	// GET /countries: list all countries
	// HEAD /countries: show the overview information of country listing
	// POST /countries: create a new country
	// GET /countries/AU: return the details of the country AU
	// HEAD /countries/AU: show the overview information of country AU
	// PATCH /countries/AU: update the country AU
	// PUT /countries/AU: update the country AU
	// DELETE /countries/AU: delete the country AU
	// OPTIONS /countries: show the supported verbs regarding endpoint /countries
	// OPTIONS /countries/AU: show the supported verbs regarding endpoint /countries/AU.
}
?>