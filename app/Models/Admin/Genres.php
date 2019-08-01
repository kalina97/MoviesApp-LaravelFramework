<?php
/**
 * Created by PhpStorm.
 * User: Kale
 * Date: 9.3.2019
 * Time: 22:03
 */

namespace App\Models\Admin;
use Illuminate\Support\Facades\DB;

class Genres
{
    public function getGenres(){
        return DB::table("zanr")
            ->get();
    }

    public function insertGenre($name){
        return DB::table("zanr")
            ->insert([
               'nazivZ'=>$name
            ]);
    }

    public function getGenreById($id){
        return DB::table("zanr")
            ->where('idZanr','=',$id)
            ->first();
    }

    public function update($id,$name){
        return DB::table("zanr")
            ->where('idZanr','=',$id)
            ->update([
               "nazivZ"=>$name
            ]);
    }

    public function deleteGenre($id){
        return DB::table("zanr")
            ->where('idZanr','=',$id)
            ->delete();
    }

}