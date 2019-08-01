<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\FrontEndController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Users;
use Psy\Util\Json;
use App\Models\Activity;
use App\Models\ErrorLogs;

class ForUserController extends FrontEndController
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new Users();
    }

    public function activities(){
        $this->data['activities']=$this->model->getActivities();
        return view("admin.activities",$this->data);

    }

    public function errors(){
        $this->data['errors']=$this->model->getErrors();
        return view("admin.errors",$this->data);

    }

    public function addresses(){
        $this->data['addresses']=$this->model->getAddr();
        return view("admin.addresses",$this->data);

    }


    public function deleteAddress(Request $request){
      $id=$request->id;
      try {
          $obrisi = $this->model->deleteAddr($id);
          if ($obrisi) {
              $id = session()->get('korisnik')->id;
              Activity::insertActivity($id, 'Admin deleted an ip address');
              return "Obrisano";
          } else {
              ErrorLogs::insertError('Address deleting failed');
              return response()->json(['code' => 500]);
          }

      }
      catch (\Exception $e) {
          ErrorLogs::insertError($e);
          return response()->json($e);
      }

    }

    public function deleteError(Request $request){
        $id=$request->id;
        try {
            $obrisi = $this->model->deleteErrors($id);
            if($obrisi){
                $id = session()->get('korisnik')->id;
                Activity::insertActivity($id, 'Admin deleted an error');
                return "Obrisano";
            }
            else {
                ErrorLogs::insertError('Error logs deleting failed');
                return response()->json(['code' => 500]);
            }

        }
        catch (\Exception $e) {
            ErrorLogs::insertError($e);
            return response()->json($e);
        }


    }

    public function deleteAct(Request $request){
        $id=$request->id;
         try {
             $obrisi = $this->model->deleteActivity($id);
             if($obrisi) {
                 $id = session()->get('korisnik')->id;
                 Activity::insertActivity($id, 'Admin deleted some user activity');
                 return "Obrisano";
             }
             else {
                 ErrorLogs::insertError('User activity deleting failed');
                 return response()->json(['code' => 500]);
             }
         }
         catch (\Exception $e) {
             ErrorLogs::insertError($e);
             return response()->json($e);
         }


    }



    public function sort(Request $request){
        $sort=$request->orderby;

        $data=$this->model->sortActivity($sort);
        return Json::encode($data);

    }







}
