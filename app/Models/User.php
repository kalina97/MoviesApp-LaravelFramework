<?php
/**
 * Created by PhpStorm.
 * User: Kale
 * Date: 5.3.2019
 * Time: 11:44
 */

namespace App\Models;
use Illuminate\Support\Facades\DB;

class User

{

    function register($name,$surname,$email,$password,$username,$token) {
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

    public function pronadji($email, $lozinka){
        return DB::table('korisnik AS k')
            ->join('uloga AS u', 'k.uloga_id', '=', 'u.id')
            ->where([
                ["email", "=", $email],
                ["lozinka", "=", md5($lozinka)]
            ])
            ->first();
    }

    function activateUser($token){
        return DB::table('korisnik')
            ->where('token',$token)
            ->update([
                "aktivan" => 1
            ]);
    }
    function getUser($id){
        return DB::table('korisnik')
            ->where('id','=',$id)
            ->select('korisnik.id')
            ->first();
    }




}