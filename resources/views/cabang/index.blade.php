@extends('layout.master')

@section('content')
<div class="box box-info" id="cabang-app">
  <div class="box-header with-border">
    <h3 class="box-title">Cabang</h3>
    <button class="btn btn-info pull-right" @click="openFormAdd">Tambah</button>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <div class="box-body table-responsive">
    <table id="table-cabang" class="table table-striped text-nowrap">
      <thead>
        <tr>
          <th>No</th>
          <th @click="onOrdering('branch_code')">Kode Cabang
            <span v-if="columnStatus.branch_code == 'desc'" class="fa fa-sort-desc"></span>
            <span v-if="columnStatus.branch_code == 'asc'" class="fa fa-sort-asc"></span>
            <span v-if="columnStatus.branch_code == 'none'" class="fa fa-sort"></span>
          </th>
          <th @click="onOrdering('branch_name')">Cabang
            <span v-if="columnStatus.branch_name == 'desc'" class="fa fa-sort-desc"></span>
            <span v-if="columnStatus.branch_name == 'asc'" class="fa fa-sort-asc"></span>
            <span v-if="columnStatus.branch_name == 'none'" class="fa fa-sort"></span>
          </th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item, index) in listCabang">
          <td>@{{ index + 1 }}</td>
          <td>@{{ item.branch_code }}</td>
          <td>@{{ item.branch_name }}</td>
          <td>
            {{-- <button type="button" class="btn btn-warning" @click="openFormUpdate(item)">Ubah</button> --}}
            <button type="button" class="btn btn-danger" @click="openFormDelete(item)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->  

  <div class="modal fade" id="modal-cabang">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">@{{titleModal}}</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="box-body">
              <div class="form-group">
                <label for="kodeCabang">Kode Cabang</label>
                <input type="text" class="form-control" @keyup="kodeCabangKeyup" v-model="kodeCabang" placeholder="Masukan kode cabang">
                <div class="validate-error" v-if="kdCabangErr1">Kode Cabang harus di isi</div>
                <div class="validate-error" v-if="kdCabangErr2">Kode Cabang harus huruf besar dan tidak ada spasi</div>
              </div>
              <div class="form-group">
                <label for="cabang">Cabang</label>
                <input type="text" class="form-control" @keyup="namaCabangKeyup" v-model="namaCabang" placeholder="Masukan nama cabang">
                <div class="validate-error" v-if="namaCabangErr">Nama cabang harus di isi</div>
              </div>
              <div class="form-group">
                <div class="validate-error" v-if="beErr" v-html="msgBeErr"></div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" :disabled="validateSimpanCabang" @click="submitCabang">Simpan</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <div class="modal fade" id="modal-confirmation">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Peringatan!</h4>
        </div>
        <div class="modal-body">
          <div class="box-body">
            @{{confirmContent}}
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" @click="submitConfirm">Ya</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <div class="modal fade" id="msg-box">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-body">
          @{{msgContent}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection

@section('script-content')
<script>
  // $('#table-cabang').DataTable({
  //   'paging'     : false,
  //   'searching'  : false,
  //   "info"       : false,
  //   "columnDefs" : [{ "orderable": false, "targets": 3 }],
  //   responsive: true
  // });
</script>
@endsection

@section('vue-content')
  <script src="{{ asset('main/js/cabang/cabang-vue.js') }}"></script>
@endsection
