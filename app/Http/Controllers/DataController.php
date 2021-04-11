<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use App\Http\Resources\Data as DataResource;
use App\Http\Requests;
class DataController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Data::paginate(15);
        return DataResource::collection($data);
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
        $data=$request->isMethod('put')?Data::
        findOrFail($request->data_id):new Data;
        $data->id=$request->input('data_id');
        $data->name_of_person=$request->input('name');
        $data->email=$request->input('email');
        if($data->save()){
            return new DataResource($data);
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
        $data=Data::findOrFail($id);
        return new DataResource($data);
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
    public function destroy($id)
    {
        $data=Data::findOrFail($id);
        if($data->delete()){

            return new DataResource($data);
        }
    }
}
