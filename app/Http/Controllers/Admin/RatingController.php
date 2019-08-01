<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\FrontEndController;
use App\Http\Requests\RatingRequest;
use App\Models\Admin\Ratings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ErrorLogs;

class RatingController extends FrontEndController
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
        $this->model = new Ratings();
    }

    public function index()
    {
        $this->data['ratings']=$this->model->getRatings();
        return view("admin.ratings.index",$this->data);
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
        $rate=$request->input("rateNumber");
        $request->validate([
            'rateNumber'=>'required|regex:/^[0-9](\.[0-9])?$/'
        ]);
        try {
            $insert = $this->model->insertRating($rate);
            if($insert) {
                $id=session()->get('korisnik')->id;
                Activity::insertActivity($id, 'Admin added a new movie rating');
                return back()->with('success', 'Movie Rating Inserted Successfully!');
            }
            else{
                ErrorLogs::insertError('Adding rating failed');
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
            $delete = $this->model->deleteRating($id);
            if($delete) {
                $id=session()->get('korisnik')->id;
                Activity::insertActivity($id, 'Admin deleted a movie rating');
                return response(null, 204);
            }
            else{
                ErrorLogs::insertError('Rating deleting failed');
                return response()->json(['code'=> 500]);
            }

         }

        catch (\Exception $e) {
            ErrorLogs::insertError($e);
            return response()->json($e);
        }


    }
}
