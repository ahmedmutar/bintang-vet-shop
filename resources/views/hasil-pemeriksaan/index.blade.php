@extends('layout.master')

@section('content')
<div class="box box-info" id="hasil-pemeriksaan-app">
  <div class="box-header with-border">
    <h3 class="box-title">Hasil Pemeriksaan</h3>
    <div class="inner-box-title">
      <div class="section-left-box-title">
        <button class="btn btn-info openFormAdd">Tambah</button>
      </div>
      <div class="section-right-box-title">
        <div class="input-search-section m-r-10px">
          <input type="text" class="form-control" placeholder="cari..">
          <i class="fa fa-search" aria-hidden="true"></i>
        </div>
        <select id="filterCabang" style="width: 50%"></select>
      </div>
    </div>
  </div>

  <div class="box-body table-responsive">
    <table class="table table-striped text-nowrap">
      <thead>
        <tr>
          <th>No</th>
          <th class="onOrdering" data='registration_number' orderby="none">No. Registrasi <span class="fa fa-sort"></span></th>
          <th class="onOrdering" data='patient_number' orderby="none">No. Pasien <span class="fa fa-sort"></span></th>
          <th class="onOrdering" data='pet_category' orderby="none">Jenis Hewan <span class="fa fa-sort"></span></th>
          <th class="onOrdering" data='pet_name' orderby="none">Nama Hewan <span class="fa fa-sort"></span></th>
          <th class="onOrdering" data='complaint' orderby="none">Keluhan <span class="fa fa-sort"></span></th>
          <th class="onOrdering" data='status_finish' orderby="none">Status Pemeriksaan <span class="fa fa-sort"></span></th>
          <th class="onOrdering" data='status_outpatient_inpatient' orderby="none">Perawatan <span class="fa fa-sort"></span></th>
          <th class="onOrdering" data='created_by' orderby="none">Dibuat Oleh <span class="fa fa-sort"></span></th>
          <th class="onOrdering" data='created_at' orderby="none">Tanggal dibuat <span class="fa fa-sort"></span></th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody id="list-hasil-pemeriksaan"></tbody>
    </table>
  </div>

  @component('hasil-pemeriksaan.modal-hasil-pemeriksaan') @endcomponent
  @component('hasil-pemeriksaan.detail-hasil-pemeriksaan') @endcomponent
  @component('layout.modal-confirmation') @endcomponent
  @component('layout.message-box') @endcomponent
</div>
@endsection
@section('script-content')
  <script src="{{ asset('main/js/hasil-pemeriksaan/hasil-pemeriksaan.js') }}"></script>  
@endsection
@section('css-content')
  <link rel="stylesheet" type='text/css' href="{{ asset('main/css/hasil-pemeriksaan.css') }}">
@endsection
@section('vue-content')@endsection