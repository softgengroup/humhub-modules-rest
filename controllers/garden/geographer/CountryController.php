<?php

namespace humhub\modules\rest\controllers\garden\geographer;

use humhub\modules\rest\components\BaseController;
use humhub\modules\rest\definitions\garden\GeographerDefinitions;
use MenaraSolutions\Geographer\Earth;

class CountryController extends BaseController
{
    public static $moduleId = 'garden';

    public function actionIndex()
    {
        $countries = (new Earth())->getCountries();

        $results = $countries->toArray();
        foreach ($countries as $country) {
            $results[] = GeographerDefinitions::getCountry($country);
        }
        return $results;
    }
}
