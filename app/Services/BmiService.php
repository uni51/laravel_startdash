<?php
/**
 * Created by PhpStorm.
 * User: starboard
 * Date: 2019/07/18
 * Time: 14:06
 */

namespace App\Services;

use App\Models\Person;

class BmiService
{
    /*
    * calc BMI from Person
    *
    * @param App\Models\Person $person
    * @return float or void
    */
    public static function getBmi(Person $person)
    {
    }

    /*
    * calc BMI
    *
    * @param float $height
    * @param float $height
    * @return float or void
    */
    private static function calcBmi(float $height, float $weight)
    {
    }
}
