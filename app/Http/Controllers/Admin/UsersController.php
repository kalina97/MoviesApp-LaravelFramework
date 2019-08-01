<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\FrontEndController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Users;
use App\Models\Activity;
use App\Models\ErrorLogs;

class UsersController extends FrontEndController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new Users();
    }

    public function index()
    {
        $this->data['users']=$this->model->getUsers();
        return view("admin.users.index",$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=$request->input("firstName");
        $surname=$request->input("lastName");
        $email=$request->input("email");
        $username=$request->input("username");
        $password=$request->input("password");
        $token = sha1(md5(time() . $password));
        $request->validate([

            'firstName' => 'required|regex:/^[A-Z][a-z]{2,9}$/',
            'lastName' => 'required|regex:/^[A-Z][a-z]{2,14}$/',
            'email' => 'required|regex:/^[a-z][A-z\.\-0-9]{4,35}\@[a-z]{2,5}(\.[a-z]{2,5}){1,3}$/|max:60',
            'username' => 'required|regex:/^[a-z0-9\_]{4,15}$/',
            'password' => 'required|regex:/^([A-Za-z\d]){8,}$/'


        ]);



        try {
            $insert = $this->model->insert($name,$surname,$email,$password,$username,$token);
            if($insert) {
                $id=session()->get('korisnik')->id;
                Activity::insertActivity($id, 'Admin added a new user');
                return back()->with('success', 'User Inserted Successfully!');

            }
            else{
                ErrorLogs::insertError('Adding user failed');
                return response()->json(['code'=> 500]);
            }
        }
        catch (\Exception $e) {
            ErrorLogs::insertError($e);
            return response()->json($e);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['oneuser']=$this->model->getUserById($id);
        return view("admin.users.edit",$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->input("id");
        //dd($id);
        $name=$request->input("firstName");
        $surname=$request->input("lastName");
        $email=$request->input("email");
        $username=$request->input("username");
        $role=$request->input("role");
        $active=$request->input("active");

        $request->validate([

            'firstName' => 'required|regex:/^[A-Z][a-z]{2,9}$/',
            'lastName' => 'required|regex:/^[A-Z][a-z]{2,14}$/',
            'email' => 'required|regex:/^[a-z][A-z\.\-0-9]{4,35}\@[a-z]{2,5}(\.[a-z]{2,5}){1,3}$/|max:60',
            'username' => 'required|regex:/^[a-z0-9\_]{4,15}$/',
            'role'=>'required|numeric|regex:/^[12]$/',
            'active'=>'required|regex:/^[01]$/'


        ]);

        try {
            $update = $this->model->update($id,$name,$surname,$email,$active,$role,$username);
            if($update) {
                $id=session()->get('korisnik')->id;
                Activity::insertActivity($id, 'Admin edited an user');
                return redirect(route("users.index"))->with('success', 'User Edited Successfully!');

            }
            else{
                ErrorLogs::insertError('Editing user failed');
                return response()->json(['code'=> 500]);
            }
        }
        catch (\Exception $e) {
            ErrorLogs::insertError($e);
            return response()->json($e);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $id=$request->id;
        try {

            $delete = $this->model->deleteUser($id);
            if($delete) {
                $id=session()->get('korisnik')->id;
                Activity::insertActivity($id, 'Admin deleted an user');
                return response(null, 204);
            }
            else{
                ErrorLogs::insertError('User deleting failed');
                return response()->json(['code'=> 500]);
            }

        }
        catch (\Exception $e) {
            ErrorLogs::insertError($e);
            return response()->json($e);
        }
    }
}
