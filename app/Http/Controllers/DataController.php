<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use File;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Data::all();
        $i = 0;

        return view('datas.index', compact('datas', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_ikan' => 'required',
            'harga_beli' => 'required',
            'penjual' => 'required',
            'tanggal_beli' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $harga = preg_replace('/[Rp. ]/', '', request('harga_beli'));

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        $data = Data::create([
            'jenis_ikan' => request('jenis_ikan'),
            'harga_beli' => $harga,
            'penjual' => request('penjual'),
            'tanggal_beli' => request('tanggal_beli'),
            'image' => $profileImage
        ]);

        return redirect()->route('datas')
            ->with('success', 'Data berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        return view('datas.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        return view('datas.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        $request->validate([
            'jenis_ikan' => 'required',
            'harga_beli' => 'required',
            'penjual' => 'required',
            'tanggal_beli' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            $profileImage = $data->image;
            unset($input['image']);
        }

        $harga = preg_replace('/[Rp. ]/', '', request('harga_beli'));

        $data->update([
            'jenis_ikan' => request('jenis_ikan'),
            'harga_beli' => $harga,
            'penjual' => request('penjual'),
            'tanggal_beli' => request('tanggal_beli'),
            'image' => $profileImage
        ]);

        return redirect()->route('datas')
            ->with('success', 'Data berhasil tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        // hapus file
        File::delete('image/' . $data->image);

        $data->delete();

        return redirect()->route('datas')
            ->with('success', 'Data deleted successfully');
    }
}
