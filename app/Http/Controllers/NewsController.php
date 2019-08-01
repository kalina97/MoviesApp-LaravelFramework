<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\Models\News;
use Psy\Util\Json;
use App\Models\ErrorLogs;
use App\Models\Activity;

class NewsController extends FrontEndController
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new News();
    }

    public function news(){
        $this->data["news"]=$this->model->getNews();
        return view("allnews",$this->data);

    }

    public function single($id){
   $this->data["new"]=$this->model->singleNew($id);
   $this->data["comments"]=$this->model->getCommentsToOne($id);
   return view("single-new",$this->data);

    }

    public function insertKom(CommentRequest $request){
        $id=$_POST['id'];
          $this->model->Datum=$request->datum;
        $this->model->Komentar=$request->comment;
        try{
        $insert=$this->model->insertKom($id);
        if($insert){

            $poslednji=$this->model->showComment();
            //var_dump($poslednji);
            Activity::insertActivity(session()->get('korisnik')->id,' The user commented on news');

            $ime = $poslednji->imeKorisnika;
            $datumNeki = $poslednji->datumKom;
            $komentar1 = $poslednji->komentar;


            $data = array(
                "ime" => $ime,
                "datum" => $datumNeki,
                "komentar" => $komentar1

            );

            return Json::encode($data);

            }

        else{
            ErrorLogs::insertError('Commenting failed');

        }

    }catch (\Exception $e) {
            ErrorLogs::insertError($e);
            return response()->json($e);
        }
    }


}
