<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RakController extends Controller
{

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'name' => 'required',
            'lokasi' => 'required'
        ]);

        if($validation->fails()){
            return response()->json($validation->errors());
        }

        $data = Rak::create([
            'name' => $request->name,
            'lokasi' => $request->lokasi
        ]);

        if(!$data){
            return response()->json([
                'success' => false,
                'message' => "Can't insert data!"
            ]);
        }
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
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
        $validation = Validator::make($request->all(),[
            'name' => 'required',
            'lokasi' => 'required'
        ]);

        if($validation->fails()){
            return response()->json($validation->errors());
        }

        $update = Rak::where('id',$id)->update([
            'name' => $request->name,
            'lokasi' => $request->lokasi
        ]);

        if(!$update){
            return response()->json([
                'success' => false,
                'message' => "Can't update data!"
            ]);
        }
        return response()->json([
            'success' => true,
            'data' => $update
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Rak::findOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true
        ]);
    }
}
