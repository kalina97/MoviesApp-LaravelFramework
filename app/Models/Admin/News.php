<?php
/**
 * Created by PhpStorm.
 * User: Kale
 * Date: 9.3.2019
 * Time: 21:37
 */

namespace App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class News
{
    public $naslov;
    public $desc;
    public $slika;
    public $id;

    public function getNews()
    {
        return DB::table("vesti")
            ->get();
    }

    public function getNewsById($id)
    {
        return DB::table("vesti")
            ->where('idVest','=',$id)
            ->first();
    }


    public function deleteNews($id){
        return DB::table("vesti")
            ->where("idVest","=",$id)
            ->delete();
    }




    public function insert(){
        DB::table("vesti")
            ->insert([
              "slikaVest"=>$this->slika,
                "naslovVest"=>$this->naslov,
                "tekst"=>$this->desc
            ]);
    }


    public function update() {
        return DB::table('vesti')
            ->where('idVest','=',$this->id)
            ->update([
                "slikaVest" => $this->slika,
                "datum"=> Carbon::now()->toDateTimeString(),
                "naslovVest" => $this->naslov,
                "tekst" => $this->desc
            ]);
    }

}