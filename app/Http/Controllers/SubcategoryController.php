<?php

namespace App\Http\Controllers;

use App\Models\subcategory;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model= new subcategory();
        $result['data'] = category::all();
        $result['data1'] = subcategory::join('categories','categories.id', '=', 'subcategories.category_name')
                 ->get(['subcategories.subcategory_name','subcategories.id','categories.category_name']);
        return view('addsubcategory',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function create(Request $request)
    {
        $model= new subcategory();

        $model->category_name = $request->post('ddcategory');

        $model->subcategory_name = $request->post('sub_category_name');
        $model->save(); 
        $result['data'] = category::all();
        $result['data1'] = subcategory::join('categories','categories.id', '=', 'subcategories.category_name')
                ->get(['subcategories.subcategory_name','subcategories.id','categories.category_name']); 
        return view('addsubcategory',$result);
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
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(subcategory $subcategory)
    {
        $model= new subcategory();
        $result['data'] = category::all();
        $result['data1'] = subcategory::join('categories','categories.id', '=', 'subcategories.category_name')
                 ->get(['subcategories.subcategory_name','subcategories.id','categories.category_name']);
        return view('addsubcategory',$result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(subcategory $subcategory)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subcategory $subcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(subcategory $subcategory,$id)
    {
        $model= new subcategory();
        $model= subcategory::find($id);
        $model->delete();
        $result['data'] = category::all();
        $result['data1'] = subcategory::join('categories','categories.id', '=', 'subcategories.category_name')
                 ->get(['subcategories.subcategory_name','subcategories.id','categories.category_name']);
        return redirect('addsubcategory',$result); 
    }
}
