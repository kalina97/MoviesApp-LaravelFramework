<?php
/**
 * Created by PhpStorm.
 * User: Kale
 * Date: 9.3.2019
 * Time: 21:12
 */

namespace App\Models\Admin;
use Illuminate\Support\Facades\DB;

class Comments
{
    public function getComments(){
        return DB::table("komentari")
            ->paginate(7);
    }

    public function deleteComment($id){
        return DB::table("komentari")
            ->where('idKomentar','=',$id)
            ->delete();
    }

}