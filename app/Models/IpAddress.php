<?php
/**
 * Created by PhpStorm.
 * User: Kale
 * Date: 7.3.2019
 * Time: 18:57
 */

namespace App\Models;
use Illuminate\Support\Facades\DB;

class IpAddress
{

    public function insert($ip){
        return DB::table('ip_adresa')
            ->insert([
                "ipAdresa"=>$ip
            ]);
    }

}