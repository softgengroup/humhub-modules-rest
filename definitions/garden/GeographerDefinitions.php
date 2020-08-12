<?php

namespace humhub\modules\rest\definitions\garden;

use humhub\modules\user\models\Profile;
use humhub\modules\user\models\Group;
use humhub\modules\user\models\User;
use MenaraSolutions\Geographer\City;
use MenaraSolutions\Geographer\Country;
use MenaraSolutions\Geographer\State;
use yii\helpers\Url;

class GeographerDefinitions
{

    public static function getCountry(Country $country): array
    {
        return $country->toArray();
    }

    public static function getState(State $state): array
    {
        return $state->toArray();
    }

    public static function getCity(City $city): array
    {
        return $city->toArray();
    }

}

