<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\catogare;
class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $catogare = catogare::all();

        return view('categories.index')->with('categories',$catogare);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            //val
    $this->validate($request , array(

        'title'           => 'required|max:255|unique:catogares,title',
        'slug'      => 'required|max:255|unique:catogares,slug',
          'summary' => 'required'
        ));

      $catogary = new catogare();
      $catogary->title = $request->title ;
      $catogary->slug = $request->slug ;
      $catogary->summary = $request->summary ;
      //image store
      if( $request->hasfile('image')){
        $file = $request->file('image');

        $ext = $file->getClientOriginalExtension() ;
        $filename = 'image' . '_' . time() . '.' . $ext ;
        $file->storeAs('public/categories' ,$filename);
        $catogary->photo = $filename;
       }
       $catogary->save();

       return redirect('/categories');

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
    public function destroy($id)
    {
        //
    }
}
