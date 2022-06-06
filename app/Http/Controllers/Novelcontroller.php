<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\novelmodel;
use mysqli;

class Novelcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $datas = novelmodel::all();
        return view('novel', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new novelmodel;
        return view('genre.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        novelmodel::create($request->all());    

        $model = new novelmodel;
        $model->judul = $request->judul;
        $model->desc_novel = $request->desc_novel;
        $model->genre = $request->genre;

        //error_log(request('genre'));
        //return request('genre');
        $model->save();
        
        
        

        return redirect('novel');
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
        $model = novelmodel::find($id);
        return view('genre.edit', compact('model'));
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
        $model = novelmodel::find($id);

        $model->update($request->all());
        return redirect('novel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //novelmodel::destroy($id);
        $model = novelmodel::find($id);
        $model->delete();

        return redirect('novel');
    }
}
