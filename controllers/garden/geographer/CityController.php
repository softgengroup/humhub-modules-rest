<?php

namespace humhub\modules\rest\controllers\garden;

use humhub\modules\rest\components\BaseController;
use humhub\modules\rest\definitions\garden\GeographerDefinitions;
use MenaraSolutions\Geographer\Country;
use MenaraSolutions\Geographer\Earth;
use MenaraSolutions\Geographer\State;
use Yii;

class CityController extends BaseController
{
    public static $moduleId = 'garden';

    public function actionIndex()
    {
        $stateId = Yii::$app->request->get('id');
        $cities = State::build($stateId)->getCities();

        $results = $cities->toArray();
        foreach ($cities as $city) {
            $results[] = GeographerDefinitions::getCity($city);
        }
        return $results;
    }
}
