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
                        <input type="text" class="form-control" id="jenis_ikan" placeholder="Jenis Ikan" name="jenis_ikan">
                        @error('jenis_ikan') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-1">
                    <div class="form-group">
                        <label for="harga">Harga Beli:</label>
                        <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga_beli" onkeyup="formatter(this.value)">
                        @error('harga') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-1">
                    <div class="form-group">
                        <label for="penjual">Penjual:</label>
                        <input type="text" class="form-control" id="penjual" placeholder="penjual" name="penjual">
                        @error('penjual') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-1">
                    <div class="form-group">
                        <label for="tanggal_beli">Tanggal Beli:</label>
                        <input type="date" class="form-control flatpickr-basic flatpickr-input" id="tanggal_beli" name="tanggal_beli">
                        @error('penjual') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-1">
                    <div class="form-group">
                        <label for="image">Foto:</label>
                        <input type="file" class="form-control" id="image" name="image">
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

@push('script')
<script>
  var rupiah = document.getElementById("harga");
        rupiah.addEventListener("keyup", function(e) {
            rupiah.value = formatRupiah(this.value, "Rp. ");
        });

        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, "").toString(),
                split = number_string.split(","),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);
            if (ribuan) {
                separator = sisa ? "." : "";
                rupiah += separator + ribuan.join(".");
            }
            rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
            return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
        }

</script>
@endpush