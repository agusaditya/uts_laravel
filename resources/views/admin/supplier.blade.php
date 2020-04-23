@extends('layout.admin')
@section('content')

<div class="col-lg-12">
<div class="page-header">
    <div class="page-header-content">
        <div>
            <h4 clas="">
                <i class="icon-home position-left"></i>
                <span class="text-semibold">Daftar supplier</span></h4>
            <a class="heading-element-toggle">
                
            </a>
        </div>
        <div class="heading-elements">
            <ul class="breadcrumb position-right">
                <li>
                <a href="{{route('supplier.index')}}">Home</a>
                </li>
                <li>
                <a href="">supplier</a>
                </li>
                <li class="active">Daftar supplier</li>
            </ul>
        </div>
        </div>
        </div>

         </div>
             <div class="content">
            <div class="panel panel-flat border-top-lg border-top-primary">
         <div class="panel-body">
                <div class="col-lg-12">
                     <table class="table table-borderless">
                    <tr>
                         <td width="700"><b>Biodata</b></td>
                         <td width="3000"></td>
                         <td width="350"><b>Studi Kasus</b></td>
                         <td width="4200"></td>
                     </tr>
                     <tr>
                         <td>Nama</td>
                         <td>Wayan Agus Aditya Mahendra</td>
                         <td>Judul</td>
                         <td>Sistem Manajemen Toko Pakaian</td>
                     </tr>
                     <tr>
                         <td>NIM</td>
                         <td>1815051026</td>
                         <td>Penjelasan</td>
                         <td>Sistem ini dibuat untuk memanajemen sebuah toko pakaian agar menjadi lebih baik dan teratur.</td>
                     </tr>
                     <tr>
                         <td>Program Studi</td>
                         <td>Pendidikan Teknik Informatika</td>
                         <td></td>
                         <td></td>
                     </tr>
                    </table>
                </div>
        
                <div class="col-lg-12">
                <a href="{{route('supplier.create')}}">Tambah data</a>
                <table class="table table-bordered">
                    <thead>
                    <tr><th>no</th><th>nama supplier</th><th>barang yang disuplai</th><th>alamat</th><th>aksi</th></tr>
                    </thead>
                    <tbody>
                        @foreach ($supplier as $in => $val)
                                <tr><td>{{($in+1)}}</td><td>{{$val->nama_suplier}}</td><td>{{$val->barang_yang_disuplai}}</td><td>{{$val->alamat}}</td>
                                <td>
                                <a href="{{route('supplier.edit',$val->id_suplier)}}">update</a>
                                <form action="{{route('supplier.destroy',$val->id_suplier)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">delete</button>
                                </form>
                                </td>
                               </tr>
                               
                        @endforeach
                        </tbody>
                    </table>
               {{$supplier->links()}}
                </div>
        </div>
    </div>
</div>
@endsection



