<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\FrontEndController;
use App\Http\Requests\GenreRequest;
use App\Models\Admin\Genres;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ErrorLogs;

class GenresController extends FrontEndController
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
        $this->model = new Genres();
    }


    public function index()
    {
        $this->data['admingenres']=$this->model->getGenres();
        return view("admin.genres.index",$this->data);
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
        $name=$request->input("genreName");
        $request->validate([
            'genreName'=>'required|regex:/^[A-Z][a-z]{2,30}$/'
        ]);



          try {
              $insert = $this->model->insertGenre($name);
              if($insert) {
                  $id=session()->get('korisnik')->id;
                  Activity::insertActivity($id, 'Admin added a new genre');
                  return back()->with('success', 'Genre Inserted Successfully!');

              }
              else{
                  ErrorLogs::insertError('Adding genre failed');
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
        $this->data['onegenre']=$this->model->getGenreById($id);
        return view("admin.genres.edit",$this->data);
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

        $id=$request->input("id");
        $name=$request->input("genreName");

        $request->validate([
            'genreName' => 'required|regex:/^[A-Z][a-z]{2,40}$/',
        ]);

        try {
            $update = $this->model->update($id,$name);
            if($update) {
                $id=session()->get('korisnik')->id;
                Activity::insertActivity($id, 'Admin edited a genre');
                return redirect(route("genres.index"))->with('success', 'Genre Edited Successfully!');

            }
            else{
                ErrorLogs::insertError('Editing genre failed');
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

            $delete = $this->model->deleteGenre($id);
            if($delete) {
                $id=session()->get('korisnik')->id;
                Activity::insertActivity($id, 'Admin deleted a genre');
                return response(null, 204);
            }
            else{
                ErrorLogs::insertError('Genre deleting failed');
                return response()->json(['code'=> 500]);
            }

         }
        catch (\Exception $e) {
            ErrorLogs::insertError($e);
            return response()->json($e);
        }


    }
}
