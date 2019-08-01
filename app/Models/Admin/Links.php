<?php
/**
 * Created by PhpStorm.
 * User: Kale
 * Date: 9.3.2019
 * Time: 20:43
 */

namespace App\Models\Admin;
use Illuminate\Support\Facades\DB;

class Links
{

    public function getLinks(){
        return DB::table("linkovi")
            ->get();
    }

    public function insertLink($name,$href,$parent){
        return DB::table("linkovi")
            ->insert([
               'imeLinka'=>$name,
                'putanja'=>$href,
                'roditelj'=>$parent
            ]);
    }

    public function update($id,$name,$href,$parent){
        return DB::table("linkovi")
            ->where('idLink','=',$id)
            ->update([
                'imeLinka'=>$name,
                'putanja'=>$href,
                'roditelj'=>$parent
            ]);


    }

    public function getLinkById($id){
        return DB::table("linkovi")
            ->where('idLink','=',$id)
            ->first();
    }

    public function deleteLink($id){
        return DB::table("linkovi")
            ->where('idLink','=',$id)
            ->delete();
    }
}