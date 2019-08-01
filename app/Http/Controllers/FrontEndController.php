<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Menu;

abstract class FrontEndController extends Controller
{
    protected $data;

    public function __construct()
    {
        $genreModel = new Genre();
        $this->data["genres"] = $genreModel->getAll();
        $menuModel=new Menu();
        $this->data["menus"]=$menuModel->getAll();

    }
}
