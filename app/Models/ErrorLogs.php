<?php
/**
 * Created by PhpStorm.
 * User: Kale
 * Date: 7.3.2019
 * Time: 13:13
 */

namespace App\Models;


class ErrorLogs
{
    public static function insertError($text){
        return \DB::table('log_greske')
            ->insert([
                "tekst" => $text,
                "datum" => date('Y-m-d'),
                "vreme" => date('H:i:s')
            ]);
    }
}