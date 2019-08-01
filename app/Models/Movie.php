<?php

namespace App\Models;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Movie
{
    /*public function getAll() {
        return DB::table("film")
            ->join("korisnik", "film.kreirao", "=", "korisnik.id")
            ->join("ocenafilma", "film.idOcena", "=", "ocenafilma.idOcena")
            ->join("zanr", "film.idZanr", "=", "zanr.idZanr")
            ->paginate(6);
    }*/

    public function getAll(){
        return DB::table("film")
            ->join("ocenafilma", "film.idOcena", "=", "ocenafilma.idOcena")
            ->paginate(6);
    }

    /*public function getMovieList() {
        return DB::table("film")
            ->join("korisnik", "film.kreirao", "=", "korisnik.id")
            ->join("ocenafilma", "film.idOcena", "=", "ocenafilma.idOcena")
            ->join("zanr", "film.idZanr", "=", "zanr.idZanr")
            ->get();
    }*/

    public function getMovieList(){
        return DB::table("film")
            ->join("ocenafilma", "film.idOcena", "=", "ocenafilma.idOcena")
            ->join("zanr", "film.idZanr", "=", "zanr.idZanr")
            ->get();
    }

    public function getFromSearch($attr){
        return DB::table("film")
            ->join("ocenafilma", "film.idOcena", "=", "ocenafilma.idOcena")
            ->join("zanr", "film.idZanr", "=", "zanr.idZanr")
            ->where("film.naziv","LIKE","%".$attr."%")
            ->get();

    }


    function paginationSearch($movie,$from,$perPage){
        return DB::table('film as f')
            ->join('ocenafilma as oc','f.idOcena','=','oc.idOcena')
            ->join("zanr as za", "f.idZanr", "=", "za.idZanr")
            ->where('f.naziv','LIKE','%'.$movie.'%')
            ->offset($from)
            ->limit($perPage)
            ->select('*')
            ->get();
    }


    public function find($id) {
        return DB::table("film")
            ->join("ocenafilma", "film.idOcena", "=", "ocenafilma.idOcena")
            ->join("zanr", "film.idZanr", "=", "zanr.idZanr")
            ->where("film.idFilm", "=", $id)->first();
    }

    public function findByGenreId($genreId) {
        return DB::table("film")
            ->join("ocenafilma", "film.idOcena", "=", "ocenafilma.idOcena")
            ->join("zanr", "film.idZanr", "=", "zanr.idZanr")
            ->where("film.idZanr", "=", $genreId)
            ->paginate(5);
    }
}