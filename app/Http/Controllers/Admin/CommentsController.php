<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\FrontEndController;
use App\Models\Admin\Comments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ErrorLogs;

class CommentsController extends FrontEndController
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
        $this->model = new Comments();
    }

    public function index()
    {
        $this->data['comments']=$this->model->getComments();
        return view("admin.comments.index",$this->data);
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
        //
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

            $delete = $this->model->deleteComment($id);
            if($delete) {
                $id=session()->get('korisnik')->id;
                Activity::insertActivity($id, 'Admin deleted a comment');
                return response(null, 204);
            }
            else{
                ErrorLogs::insertError('Comment deleting failed');
                return response()->json(['code'=> 500]);
            }

        }
        catch (\Exception $e) {
            ErrorLogs::insertError($e);
            return response()->json($e);
        }
    }
}
