@extends('_layouts.main')
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
<div>
<a class="btn btn-primary" href="{{ route('datas.create') }}"> Tambah Data</a>
<table class="table table-bordered mt-5">
    <thead>
        <tr>
            <th>No.</th>
            <th>Jenis Ikan</th>
            <th>Harga Beli</th>
            <th>Penjual</th>
            <th>Tanggal Beli</th>
            <th>Foto</th>
            <th width="150px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datas as $data)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $data->jenis_ikan }}</td>
            <td>{{ $data->harga_beli }}</td>
            <td>{{ $data->penjual }}</td>
            <td>{{ $data->tanggal_beli }}</td>
            <td><img src="/image/{{ $data->image }}" width="100px"></td>
            <td>
                <form action="{{ route('datas.destroy',$data->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('datas.edit',$data->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection