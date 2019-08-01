<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\ErrorLogs;
use App\Models\Activity;


class MoviesController extends FrontEndController
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new Movie();
    }

    public function index() {
        $this->data['movies'] =  $this->model->getAll();
        return view("movies", $this->data);
    }

    public function adminPage(){
        return view("admin.admin",$this->data);
    }

    public function lista() {
        $this->data['movies'] =  $this->model->getMovieList();
        return view("movie-list", $this->data);
    }

    function search(Request $request,$attr){
       if($request->ajax()){
           $attr=$request->polje;
           //dd($attr);
       }

        try {
            $data = $this->model->getFromSearch($attr);
            if ($data) {
                Activity::insertActivity(session()->get('korisnik')->id,' The user searching some movies');
                return response()->json($data);
            } else {
                ErrorLogs::insertError('Searching failed');
                return 'No results found';
            }
        }
       catch (\Exception $e){
           ErrorLogs::insertError($e);
           return response()->json($e);
       }



    }



    function paginationSearch(Request $req) {
        //return "dkpla";
        $page = $req->page;
        $movie = $req->movie;
        $perPage = $req->numPerPage;
        //dd($perPage);
        $offset = ($page - 1) * $perPage;
        $data = $this->model->paginationSearch($movie,$offset,$perPage);
         //dd($res);
        return response()->json($data);
    }


    public function single($id) {
        $this->data['movie'] = $this->model->find($id);
        return view("single", $this->data);
    }

    public function byCategory($id) {
        $this->data['movies'] = $this->model->findByGenreId($id);
        return view("movies", $this->data);
    }

    public function author(){
        return view("author",$this->data);
    }

}
