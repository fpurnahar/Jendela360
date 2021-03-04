<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewproduct = ProductModel::get();
        return view('page.product.detailproduct', compact('viewproduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'nama_mobil' => 'required',
            'harga_mobil' => 'required',
            'stock_mobil' => 'required',
        ]);

        $addproduct = new ProductModel();
        $addproduct->nama_mobil = $request->nama_mobil;
        $addproduct->harga_mobil = $request->harga_mobil;
        $addproduct->stock_mobil = $request->stock_mobil;

        $addproduct->save();
        return redirect('/detailproduct')->with('success', 'Product Success Di Tambahkan');
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
        $editproduct = ProductModel::where('id', $id)->first();
        return view('page.product.editproduct', compact('editproduct'));
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
        $request->validate([
            'nama_mobil' => 'required',
            'harga_mobil' => 'required',
            'stock_mobil' => 'required',
        ]);

        ProductModel::where('id', $id)->update([
            'nama_mobil' => $request->nama_mobil,
            'harga_mobil' => $request->harga_mobil,
            'stock_mobil' => $request->stock_mobil
        ]);
        return redirect('/detailproduct')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductModel::destroy($id);
        return back()->with('success', 'Data Berhasil Dihapus');
    }
}
