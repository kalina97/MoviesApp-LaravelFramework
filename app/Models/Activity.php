<?php
/**
 * Created by PhpStorm.
 * User: Kale
 * Date: 7.3.2019
 * Time: 13:09
 */

namespace App\Models;


class Activity
{
    static function insertActivity($userID, $activity)
    {
        return \DB::table('aktivnost_korisnika')
            ->insert([
                "idKorisnik" => $userID,
                "aktivnost" => $activity,
                "datum" => date('Y-m-d'),
                "vreme" => date('H:i:s')
            ]);
    }

}