<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\FrontEndController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Links;
use App\Models\Activity;
use App\Models\ErrorLogs;

class LinkController extends FrontEndController
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
        $this->model = new Links();
    }

    public function index()
    {
        $this->data['links']=$this->model->getLinks();
        return view("admin.links.index",$this->data);
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
        $name=$request->input('linkName');
        $href=$request->input('linkHref');
        $parent=$request->input('parentLink');
        $request->validate([
            'linkName'=>'required|regex:/^[A-Z][a-z]{2,30}$/',
            'linkHref'=>'required|regex:/^[\/a-z\-]+$/',
            'parentLink'=>'required|regex:/^[0-9]{1,4}$/'
        ]);
        try {
            $insert = $this->model->insertLink($name,$href,$parent);
            if($insert) {
                $id=session()->get('korisnik')->id;
                Activity::insertActivity($id, 'Admin added a new link to navigation');
                return back()->with('success', 'Navigation Link Inserted Successfully!');

            }
            else{
                ErrorLogs::insertError('Adding link failed');
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
        $this->data['onelink']=$this->model->getLinkById($id);
        return view("admin.links.edit",$this->data);
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
        $name=$request->input('linkName');
        $href=$request->input('linkHref');
        $parent=$request->input('parentLink');

        $request->validate([
            'linkName'=>'required|regex:/^[A-Z][a-z]{2,30}$/',
            'linkHref'=>'required|regex:/^[\/a-z\-]+$/',
            'parentLink'=>'required|regex:/^[0-9]{1,4}$/'
        ]);

        try {
            $update = $this->model->update($id,$name,$href,$parent);
            if($update) {
                $id=session()->get('korisnik')->id;
                Activity::insertActivity($id, 'Admin edited a navigation link');
                return redirect(route("links.index"))->with('success', 'Link Edited Successfully!');

            }
            else{
                ErrorLogs::insertError('Editing link failed');
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

            $delete = $this->model->deleteLink($id);
            if($delete) {
                $id=session()->get('korisnik')->id;
                Activity::insertActivity($id, 'Admin deleted a navigation link');
                return response(null, 204);
            }
            else{
                ErrorLogs::insertError('Link deleting failed');
                return response()->json(['code'=> 500]);
            }

        }
        catch (\Exception $e) {
            ErrorLogs::insertError($e);
            return response()->json($e);
        }
    }
}
