<?php
/**
 * Created by PhpStorm.
 * User: Kale
 * Date: 2.3.2019
 * Time: 14:15
 */

namespace App\Models;


class News
{
    public $Datum;
    public $Komentar;

    public function getNews(){
        return \DB::table("vesti")
            ->paginate(3);
    }

    public function singleNew($id){
        return \DB::table("vesti")
            ->where("vesti.idVest", "=", $id)->first();
    }

    public function getCommentsToOne($id){
        return \DB::table("komentari")
            ->where("komentari.idVest", "=", $id)
            ->orderBy('komentari.datumKom','desc')
            ->get();

    }

    public function insertKom($id){
        return \DB::table("komentari")
            ->insert([
                'imeKorisnika'=>session()->get('korisnik')->ime,
                'komentar'=>$this->Komentar,
                'datumKom'=>$this->Datum,
                'idVest'=>$id

            ]);

    }

    public function showComment(){
        return \DB::table('vesti AS v')
            ->join('komentari AS k','v.idVest','=','k.idVest')
            ->limit(1)
            ->orderBy('k.idKomentar','desc')
            ->first();
    }


}