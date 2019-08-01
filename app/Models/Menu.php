<?php
/**
 * Created by PhpStorm.
 * User: Kale
 * Date: 4.3.2019
 * Time: 14:22
 */

namespace App\Models;
use Illuminate\Support\Facades\DB;


class Menu
{

    public function getAll() {
        $menus = DB::table('linkovi')->get();

        return $menus;
    }




}