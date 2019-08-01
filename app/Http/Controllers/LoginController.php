<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Mail;
use App\Models\ErrorLogs;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;


use Psy\Util\Json;
class LoginController extends FrontEndController
{

    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new User();
    }



    public function showLoginForm() {
        return view("login",$this->data);
    }

    public function showRegisterForm(){
        return view("register",$this->data);
    }

    public function doRegister(\App\Http\Requests\RegisterUserRequest $request) {
        $name = $request->input('firstName');
        $lastName = $request->input('lastName');
        $username = $request->input('username');
        $password = $request->input('sifra');
        $email = $request->input('email');
        $token = sha1(md5(time() . $password));


        try{
            $insert=$this->model->register($name,$lastName,$email,$password,$username,$token);
            if($insert){
                Activity::insertActivity($insert,' The user has registered');
                $mail = new Mail();
                $code = $mail->register($token,$email);
                return response()->json(['code'=> $code]);
            }
            else{
                ErrorLogs::insertError('Register failed');
                return response()->json(['code'=> 250]);
            }

        }catch (\Exception $e) {
            ErrorLogs::insertError($e);
            return response()->json($e);
        }

    }



    public function doLogin(\App\Http\Requests\LoginUserRequest $request){
        // dd($request);
        //if($request->has('btnLogin')){
        $email= $request->email;
        $lozinka = $request->password;
            $korisnik = new User();
            $user = $korisnik->pronadji($email, $lozinka);

            if($user){
                // Kreiranje sesije
                $request->session()->put('korisnik', $user);
                //var_dump($request->session()->get('korisnik'));

                Activity::insertActivity($user->id,' User logged in');
                return response()->json(['code'=> 200]);

            }
            else{
                ErrorLogs::insertError('Login failed - Unprocessable Entity');
                return response()->json(['code'=>422]);
            }


        }


    public function logout(Request $request){
        if($request->session()->has('korisnik')){
            $id=$request->session()->get('korisnik')->id;
            $request->session()->forget('korisnik');
            $request->session()->flush();
            Activity::insertActivity($id,' User logged out');
        }
        return redirect(route("login-form"));
    }

    public function verification($token) {
        $result = $this->model->activateUser($token);
        if($result){
            return redirect('/movies/');
        }
        return redirect('/movies/');


    }

}
