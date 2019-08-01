<?php


namespace App\Models;


class Genre
{
    public function getAll() {
        return \DB::table("zanr")->get();
    }
}