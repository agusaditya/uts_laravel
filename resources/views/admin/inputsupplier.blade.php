@extends('layout.admin')
@section('content')
<div class="page-header">

    <div class="page-header-content">
        
        
        </div>

         </div>
        <div class="content">
            <div class="panel panel-flat border-top-lg border-top-primary">
            <form action="{{(isset($supplier))?route('supplier.update',$supplier -> id_suplier):route('supplier.store')}}" method="POST" >
            @csrf
            @if(isset($supplier))@method('PUT')@endif

                <div class="panel-body">
                     <div class="form-group">
                         <label class="control-label col-lg-2 ">nama supplier</label>
                             <div class="col-lg-10">
                                 <input type="text" value="{{(isset($supplier))?$supplier->nama_suplier:old('nama_suplier')}}" name="nama_suplier" class="form-control">
                                 @error('nama_suplier')<small style="color:red">  {{$message}} </small>@enderror
                        </div>
                         </div>

                         <div class="form-group">
                         <label class="control-label col-lg-2 ">barang yang disuplai</label>
                             <div class="col-lg-10">
                                 <input type="text" value="{{(isset($supplier))?$supplier->barang_yang_disuplai:old('barang_yang_disuplai')}}" name="barang_yang_disuplai" class="form-control">
                                 @error('barang_yang_disuplai')<small style="color:red">  {{$message}} </small>@enderror
                        </div>
                         </div>

                         <div class="form-group">
                         <label class="control-label col-lg-2 ">alamat</label>
                             <div class="col-lg-10">
                                 <input type="text" value="{{(isset($supplier))?$supplier->alamat:old('alamat')}}" name="alamat" class="form-control">
                                 @error('alamat')<small style="color:red">  {{$message}} </small>@enderror
                        </div>
                         </div>

                         <div class="col-lg-2">
                                <div class="form-group">
                                <button type="submit">simpan</button>
                                </div>
                                </div>
                         </div>
                               
  </div>
</form>
</div>
</div>
@endsection