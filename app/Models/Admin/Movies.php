<?php
/**
 * Created by PhpStorm.
 * User: Kale
 * Date: 7.3.2019
 * Time: 23:02
 */

namespace App\Models\Admin;
use Illuminate\Support\Facades\DB;
use App\Models\ErrorLogs;

class Movies
{
    public $name;
    public $desc;
    public $genre;
    public $slika;
    public $length;
    public $trailer;
    public $rating;
    public $stars;


    public function getMovies(){
        return DB::table("film")
            ->join("ocenafilma","film.idOcena","=","ocenafilma.idOcena")
            ->join("zanr","film.idZanr","=","zanr.idZanr")
            ->paginate(8);
    }

    public function deleteMovie($id){
        return DB::table("film")
            ->where("idFilm","=",$id)
            ->delete();


    }

  public function deleteRate($id){
      return DB::table("ocenafilma")
          ->where('idOcena','=',$id)
          ->delete();
  }


    public function getMovieById($id){
        return DB::table("film")
            ->where('idFilm','=',$id)
            ->first();
    }


    public function insert()
    {

        try {
            return DB::transaction(function () {
                $id = DB::table("ocenafilma")->insertGetId([
                    "ocena" => $this->rating
                ]);

                DB::table("film")->insert([
                    "naziv" => $this->name,
                    "opis" => $this->desc,
                    "slika" => $this->slika,
                    "trajanjeMin"=>$this->length,
                    "trailer" => $this->trailer,
                    "glavneUloge"=>$this->stars,
                    "idZanr" => $this->genre,
                    "idOcena" => $id,
                ]);



            });

        } catch (\Exception $e) {
            ErrorLogs::insertError($e);
            return response()->json($e);
        }

    }

}