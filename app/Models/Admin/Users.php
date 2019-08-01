<?php
/**
 * Created by PhpStorm.
 * User: Kale
 * Date: 7.3.2019
 * Time: 21:26
 */

namespace App\Models\Admin;
use Illuminate\Support\Facades\DB;


class Users
{

    public function getUsers(){
        return DB::table("korisnik")
            ->get();
    }

    public function getUserById($id){
        return DB::table("korisnik")
            ->where('id','=',$id)
            ->first();
    }



    public function getActivities(){
        return DB::table("aktivnost_korisnika")
            ->get();
    }

    public function getErrors(){
        return DB::table("log_greske")
            ->paginate(7);
    }

    public function getAddr(){
        return DB::table("ip_adresa")
            ->get();
    }

    public function deleteAddr($id){
        return DB::table("ip_adresa")
            ->where("idIp","=",$id)
            ->delete();
    }

    public function deleteErrors($id){
        return DB::table("log_greske")
            ->where("idGreska","=",$id)
            ->delete();
    }

    public function deleteActivity($id){
        return DB::table("aktivnost_korisnika")
            ->where("idAktivnost","=",$id)
            ->delete();
    }

    public function deleteUser($id){
        return DB::table("korisnik")
            ->where("id","=",$id)
            ->delete();
    }




    public function sortActivity($orderby){
        return DB::table("aktivnost_korisnika")
            ->orderBy('datum',$orderby)
            ->get();
    }


    public function insert($name,$surname,$email,$password,$username,$token) {
        return DB::table('korisnik')
            ->insertGetId([
                "ime" => $name,
                "prezime" => $surname,
                "korisnicko_ime"=>$username,
                "lozinka" => md5($password),
                "email" => $email,
                "aktivan" => 0,
                "token" => $token,
                "uloga_id" => 2
            ]);
    }


    public function update($id,$name,$surname,$email,$active,$role,$username) {
        return DB::table('korisnik')
            ->where('id','=',$id)
            ->update([
                "ime" => $name,
                "prezime" => $surname,
                "email" => $email,
                "aktivan" => $active,
                "uloga_id" => $role,
                "korisnicko_ime"=>$username,
            ]);
    }







}