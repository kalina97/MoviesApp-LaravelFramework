<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\FrontEndController;
use App\Models\Admin\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ErrorLogs;

class NewsController extends FrontEndController
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
        $this->model = new News();
    }
    public function index()
    {
        $this->data['news']=$this->model->getNews();
        return view("admin.news.index",$this->data);
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
        $request->validate([
            'slika' => "file|required|mimes:jpg,jpeg,gif,png|max:3000", // in KB
            'naslov' => 'required|regex:/^[A-Z][a-z\s]+$/',
            'desc' => 'required|min:10'
        ]);

        $slika=$request->file("slika");
        $fileName = $slika->getClientOriginalName();
        $fileName = time() . "_" . $fileName;
        public_path("images");

        try {
            $slika->move(public_path("images"), $fileName);
            $this->model->naslov=$request->input("naslov");
            $this->model->desc=$request->input("desc");
            $this->model->slika=$fileName;

            $this->model->insert();
            $id=session()->get('korisnik')->id;
            Activity::insertActivity($id, 'Admin added some news');

            return back()->with('success', 'News Inserted Successfully!');

        }
        catch (\Exception $e) {
            ErrorLogs::insertError('Adding news failed');
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
        $this->data['onenew']=$this->model->getNewsById($id);
        return view("admin.news.edit",$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $request->validate([
            'slika' => "file|required|mimes:jpg,jpeg,gif,png|max:3000", // in KB
            'naslov' => 'required|regex:/^[A-Z][a-z\s]+$/',
            'desc' => 'required|min:10'

        ]);
        $slika=$request->file("slika");
        $fileName = $slika->getClientOriginalName();
        $fileName = time() . "_" . $fileName;
        public_path("images");


        try {
            $slika->move(public_path("images"), $fileName);
            $this->model->id=$request->input("id");
            $this->model->naslov=$request->input("naslov");
            $this->model->desc=$request->input("desc");
            $this->model->slika=$fileName;

            $this->model->update();
            $id=session()->get('korisnik')->id;
            Activity::insertActivity($id, 'Admin edited some news');

            return redirect(route("news.index"))->with('success', 'News Edited Successfully!');

        }
        catch (\Exception $e) {
            ErrorLogs::insertError('Editing news failed');
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
            $idvesti=$this->model->getNewsById($id);
            $filePath=public_path("images/" ).$idvesti->slikaVest;
            $delete = $this->model->deleteNews($id);
            if($delete) {
                unlink($filePath);
                $id=session()->get('korisnik')->id;
                Activity::insertActivity($id, 'Admin deleted some news');
                return response(null, 204);
            }
            else{
                ErrorLogs::insertError('News deleting failed');
                return response()->json(['code'=> 500]);
            }

        }
        catch (\Exception $e) {
            ErrorLogs::insertError($e);
            return response()->json($e);
        }
    }
}
