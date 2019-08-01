<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\FrontEndController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Movies;
use App\Models\Activity;
use App\Models\ErrorLogs;
use Illuminate\Support\Facades\DB;

class MoviesController extends FrontEndController
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
        $this->model = new Movies();
    }

    public function index()
    {
        $this->data['adminmovies']=$this->model->getMovies();
        return view("admin.movies.index",$this->data);
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

            'name' => 'required|regex:/^[A-Z][a-z\s]+$/',
            'desc' => 'required|min:10',
            "slika" => "file|required|mimes:jpg,jpeg,gif,png|max:3000", // in KB
            'length' => 'required|numeric|min:40',
            'trailer' => 'required|url', //active_url
            'stars'=>'required|min:10',
            'genre'=>'required|not_in:0',
            'rating'=>'required|regex:/^[0-9](\.[0-9])?$/'


        ]);

        $slika=$request->file("slika");
        $fileName = $slika->getClientOriginalName();
        $fileName = time() . "_" . $fileName;
        public_path("images");

        try {
            $slika->move(public_path("images"), $fileName);
            $this->model->name=$request->input("name");
            $this->model->desc=$request->input("desc");
            $this->model->slika=$fileName;
            $this->model->length=$request->input("length");
            $this->model->trailer=$request->input("trailer");
            $this->model->stars=$request->input("stars");
            $this->model->genre=$request->input("genre");
            $this->model->rating=$request->input("rating");

            $this->model->insert();
            $id=session()->get('korisnik')->id;
            Activity::insertActivity($id, 'Admin added a new movie');

            return back()->with('success', 'Movie Inserted Successfully!');

        }
        catch (\Exception $e) {
            ErrorLogs::insertError('Adding movie failed');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
            $idfilma=$this->model->getMovieById($id);
            $filePath=public_path("images/" ).$idfilma->slika;

            $delete = $this->model->deleteMovie($id);

            $delRat=$this->model->deleteRate($idfilma->idOcena);

            if($delete){
                unlink($filePath);
                $id=session()->get('korisnik')->id;
                Activity::insertActivity($id, 'Admin deleted a movie');
                return response(null, 204);
            }
            else{
                ErrorLogs::insertError('Movie deleting failed');
                return response()->json(['code'=> 500]);
            }

        }
        catch (\Exception $e) {
            ErrorLogs::insertError($e);
            return response()->json($e);
        }
    }
}
