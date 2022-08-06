<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = products::all();
        return view('product.products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.add_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:products|max:255',
            'price' => 'required',
            'image' => 'mimes:pdf,jpeg,png,jpg',
    
        ],[

            'name.required' =>'يرجي ادخال اسم المنج',
            'name.unique' =>'اسم المنتج مسجل مسبقا',
            'price.required' =>'يرجي ادخال سعر المنج',
            'image.mimes' => 'صيغة المرفق يجب ان تكون   pdf, jpeg , png , jpg',


        ]);
        $image = $request->file('upload');
        $file_name = $image->getClientOriginalName();
        products::create([
         
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'type'=> $request->type,
            'active'=>1,
            'image'=>  $file_name,
         
        ]);
   
            // move pic
        
            $imageName = $request->upload->getClientOriginalName();
            $request->upload->move(public_path('Attachments/'.'images'), $imageName);
            
            session()->flash('Add', 'تم اضافة المنتج بنجاح');
            return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
    }
}
