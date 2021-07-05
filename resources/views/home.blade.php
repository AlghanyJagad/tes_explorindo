@extends('_layouts.main')
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
<section id="dashboard-analytics">
<div class="row match-height">

  <div class="col-lg-6 col-md-12 col-sm-12">
    <div class="card card-congratulations">
      <div class="card-body text-center">
        <div class="avatar avatar-xl bg-primary shadow">
          <div class="avatar-content">
            <i data-feather="heart" class="font-large-1"></i>
          </div>
        </div>
        <div class="text-center">
          <h1 class="mb-1 text-white">Selamat Datang</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-6 col-sm-12 col-12">
    <div class="card">
      <div class="card-header flex-column ">
        <div class="avatar bg-light-primary p-50 m-0">
          <div class="avatar-content">
            <i data-feather="info" class="font-medium-5"></i>
          </div>
        </div>
        <h2 class="font-weight-bolder mt-1">{{ $jumlah }}</h2>
        <h2 class="card-text">Jumlah Ikan</h2>
      </div>
      <div id="gained-chart"></div>
    </div>
  </div>

</div>
<section>
@endsection