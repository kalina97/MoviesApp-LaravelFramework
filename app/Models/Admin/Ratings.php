<?php
/**
 * Created by PhpStorm.
 * User: Kale
 * Date: 9.3.2019
 * Time: 21:26
 */

namespace App\Models\Admin;
use Illuminate\Support\Facades\DB;

class Ratings
{
    public function getRatings(){
        return DB::table("ocenafilma")
            ->get();
    }

    public function insertRating($rate){
        return DB::table("ocenafilma")
            ->insert([
               'ocena'=>$rate
            ]);
    }

    public function deleteRating($id){
        return DB::table("ocenafilma")
            ->where('idOcena','=',$id)
            ->delete();
    }
}