<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use App\Mail;
use App\Models\Activity;
use App\Models\ErrorLogs;



class ContactController extends FrontEndController
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new Mail();
    }


    public function contactForm(){
          return view("contact",$this->data);
      }

        public function support(Request $request){
              $email = $request->input('email');
              $name= $request->input('ime');
              $subject = $request->input('subject');
              $komentar = $request->input('comment');
            $userID = $request->input('userID');
              try{
                  $res = $this->model->support($email,$name,$subject,$komentar);
                  if($res) {
                      Activity::insertActivity($userID,' Contact message for admin was sent');
                      return response()->json(['code'=>$res]);
                  }
                  else {

                      return response()->json(['code' => $res]);
                  }
                  }catch (\Exception $e) {
                  ErrorLogs::insertError($e);
              }
          }

}
