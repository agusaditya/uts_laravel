<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title='Supplier';
        $supplier= Supplier ::paginate(5);
        //dd($supplier);
        return view('admin.supplier', compact ('title','supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title="inputsupplier";
        return view('admin.inputsupplier',compact('title'));
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
        $messages = [
            'required'=> 'kolom:attribut harus lengkap',
            'date'    => 'kolom:attribut harus tanggal',
            'numeric'=> 'kolom:attribut harus angka',
        ];
        $validasi = $request->validate([
            'nama_suplier' => 'required',
            'barang_yang_disuplai' => '',
            'alamat' => '',
        ],$messages);
        //dd($validasi);
        Supplier::create($validasi);
        return redirect('supplier')-> with('success','data berhasil di update');
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
        $title="inputsupplier";
        $supplier=Supplier::find($id);
        return view('admin.inputsupplier',compact('title','supplier'));
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
        $messages = [
            'required'=> 'kolom:attribut harus lengkap',
            'date'    => 'kolom:attribut harus tanggal',
            'numeric'=> 'kolom:attribut harus angka',
        ];
        $validasi = $request->validate([
            'nama_suplier' => 'required',
            'barang_yang_disuplai' => 'required',
            'alamat' => 'required',
        ],$messages);
        //dd($validasi);
        Supplier::whereid_suplier($id)->update($validasi);
        return redirect('supplier')-> with('success','data berhasil di update');
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
        Supplier::whereid_suplier($id)->delete();
        return redirect('supplier')-> with('success','data berhasil di update');
    }
}
