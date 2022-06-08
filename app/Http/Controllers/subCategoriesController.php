<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\SubCategory;
use  App\Models\catogare;

class subCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $SubCategory = SubCategory::all();
          $category = catogare::all();
          return view('subCatogaries.index')->with('subCategories',$SubCategory)->with('categories',$category);
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
      

    $subCategory = new SubCategory();
  
    $subCategory->title = $request->title ;
    $subCategory->slug = $request->slug ;
    $subCategory->summary = $request->summary ;
    //image store
    if( $request->hasfile('image')){
      $file = $request->file('image');

      $ext = $file->getClientOriginalExtension() ;
      $filename = 'image' . '_' . time() . '.' . $ext ;
      $file->storeAs('public/subCategories' ,$filename);
      $subCategory->photo = $filename;
     }  $subCategory->category_id = 1;
     $subCategory->save();

     return redirect('/sub-categories');


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
