@extends('_layouts.main')
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
<div>
<div class="content-body"><!-- Basic Inputs start -->
    <section id="basic-input">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Tambah Data</h4>
            </div>
            <form action="{{ route('datas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
              <div class="row">
                <div class="col-xl-4 col-md-6 col-12 mb-1">
                    <div class="form-group">
                        <label for="jenis_ikan">Jenis Ikan:</label>
                        <input type="text" class="form-control" id="jenis_ikan" placeholder="Jenis Ikan" name="jenis_ikan" required>
                        @error('jenis_ikan') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-1">
                    <div class="form-group">
                        <label for="harga">Harga Beli:</label>
                        <input type="text" class="form-control" id="harga_beli" placeholder="Harga" name="harga_beli"
                        required>
                        @error('harga') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-1">
                    <div class="form-group">
                        <label for="penjual">Penjual:</label>
                        <input type="text" class="form-control" id="penjual" placeholder="penjual" name="penjual" required>
                        @error('penjual') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-1">
                    <div class="form-group">
                        <label for="tanggal_beli">Tanggal Beli:</label>
                        <input type="date" class="form-control" id="tanggal_beli" name="tanggal_beli" required>
                        @error('penjual') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-1">
                    <div class="form-group">
                        <label for="image">Foto:</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
            </div>
          </div>
        </div>
    </section>
</div>
</div>
@endsection