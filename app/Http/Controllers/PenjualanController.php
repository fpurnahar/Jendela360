<?php

namespace App\Http\Controllers;

use App\Models\PenjualanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\HelloMail;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewpenjualan = PenjualanModel::get();
        return view('page.penjualan.detailpenjualan', compact('viewpenjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'brand_mobil' => 'required',
        ]);

        $addpenjualan = Mail::to('fadhil.purnahar@gmail.com')->send(new HelloMail());
        $addpenjualan = new PenjualanModel();
        $addpenjualan->nama = $request->nama;
        $addpenjualan->email = $request->email;
        $addpenjualan->phone = $request->phone;
        $addpenjualan->brand_mobil = $request->brand_mobil;

        $addpenjualan->save();
        return redirect('/detailpenjualan')->with('success', 'Product Success Di Tambahkan & Invoice Berhasil dikirim');
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
        $editpenjualan = PenjualanModel::where('id', $id)->first();
        return view('page.penjualan.editpenjualan', compact('editpenjualan'));
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
            'nama' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'brand_mobil' => 'required',
        ]);

        PenjualanModel::where('id', $id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'phone' => $request->phone,
            'brand_mobil' => $request->brand_mobil
        ]);
        return redirect('/detailpenjualan')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PenjualanModel::destroy($id);
        return back()->with('success', 'Data Berhasil Dihapus');
    }

    /**
     * This Send Email voice.
     *
     * Use gunEmail
     * @return Illuminate\Support\Facades\Mail
     */
    public function sendMail()
    {
    }
}
