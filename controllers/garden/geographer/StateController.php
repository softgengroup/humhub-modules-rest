<?php

namespace humhub\modules\rest\controllers\garden;

use humhub\modules\rest\components\BaseController;
use humhub\modules\rest\definitions\garden\GeographerDefinitions;
use MenaraSolutions\Geographer\Country;
use MenaraSolutions\Geographer\Earth;
use Yii;

class StateController extends BaseController
{
    public static $moduleId = 'garden';

    public function actionIndex()
    {
        $countryId = Yii::$app->request->get('id');
        $states = Country::build($countryId)->getStates();

        $results = $states->toArray();
        foreach ($states as $state) {
            $results[] = GeographerDefinitions::getState($state);
        }
        return $results;
    }
}
