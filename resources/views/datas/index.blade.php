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
            <td>{{ "Rp. " . number_format($data->harga_beli, 0, ".", "."); }}</td>
            <td>{{ $data->penjual }}</td>
            <td>{{ $data->tanggal_beli }}</td>
            <td><img src="/image/{{ $data->image }}" width="100px"></td>
            <td>
                <a href="{{ route('datas.edit', $data->id) }}" 
                    class="btn btn-primary btn-block mb-1">Edit</a>
                <button type="submit" onclick="deleteRow( {{ $data->id }} )"
                    class="btn btn-danger btn-block">Delete</button>
                <form action="{{ route('datas.destroy', $data->id) }}" method="post"
                    id="DeleteData{{ $data->id }}">
                    @csrf
                    @method('DELETE')
                </form>
                <script>
                    function deleteRow(id) {
                        Swal.fire({
                            title: 'Apakah Anda Yakin?',
                            text: "Anda tidak akan bisa mengembalikan data!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ya, hapus ini!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire({
                                    title: "Sedang menghapus Data",
                                    showConfirmButton: false,
                                    timer: 2300,
                                    timerProgressBar: true,
                                    onOpen: () => {
                                        document.getElementById(
                                            `DeleteData${id}`).submit();
                                        Swal.showLoading();
                                    }
                                });
                            }
                        })
                    }

                </script>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection