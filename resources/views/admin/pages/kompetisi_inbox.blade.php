@extends('admin.default')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        BERANDA
        <small>Beranda</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:void(0)"><i class="fa fa-home"></i> Beranda</a></li>
        <!--<li class="active">Here</li>-->
      </ol>
    </section>
  
    <!-- Main content -->
    <section class="content container-fluid">
  
        <div class="row">
            <div class="col-xs-12"> 
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Registrasi Kompetisi Baru</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body table-responsive">
                    @include('admin.alert._alertSuccess')
                    @include('admin.alert._alertError')
                    <br/>
                  <table id="kompetisiinbox" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Jenis Lomba</th>
                        <th>Nama Tim</th>
                        <th>Asal Sekolah / PT</th>
                        <th>Email Tim</th>
                        <th>Berkas Pendaftaran</th>
                        <th>Tanggal Registrasi</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                        
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
          </div>
        </div>
          <!-- /.row -->
  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('admin.modals.konfirmasi-kompetisi')

  <script>
    var save_method;

    var table = $('#kompetisiinbox').DataTable({
      processing: false,
      serverSide: true,
      ajax: {
          url: '{{ url("admin/api/kompetisi") }}'
      },
      columns: [
        {data: 'id', name: 'id'},
        {data: 'jenis_lomba', name: 'jenis_lomba'},
        {data: 'nama_tim', name: 'nama_tim'},
        {data: 'asal_sekolah', name: 'asal_sekolah'},
        {data: 'email_tim', name: 'email_tim'},
        {data: 'berkas_konfirmasi', name: 'berkas_konfirmasi'},
        {data: 'tgl_registrasi', name: 'tgl_registrasi'},
        {data: 'action', name: 'action'},
      ],
      order: [6, 'desc'],
      lengthMenu: [
        [ 10, 25, 50, 100, 200, -1 ],
        [ '10', '25', '50', '100', '200', 'Show all' ]
      ],
      dom: 'lBfrtip',  
      buttons: [  
        'excel'  
      ],
    });

    function lihatData(id){
      var url = "{{ url('admin/api') }}"+"/"+id+"/kompetisi";
      $.getJSON( url, function( data ) {
        $('#modal-form').modal('show');
        $('.modal-title').text('Data Peserta Kompetisi');
        var jenis_lomba = "";
        if(data.jenis_lomba == "adc"){
          jenis_lomba = "Application Development Competition";
        } else if(data.jenis_lomba == "wdc"){
          jenis_lomba = "Web Develpoment Competition";
        } else if(data.jenis_lomba == "dpc"){
          jenis_lomba = "Database Programming Competition";
        } else {
          jenis_lomba = "Graphic Design Competition";
        }

        $("#jenis_lomba").val(jenis_lomba);
        $("#nama_tim").val(data.nama_tim);
        $("#asal_sekolah").val(data.asal_sekolah);
        $("#nama_ketua_tim").val(data.nama_ketua_tim);
        $("#no_ketua_tim").val(data.no_ketua_tim);
        $("#email_ketua_tim").val(data.email_ketua_tim);
        $("#foto_ketua_tim").attr("src","{{ asset('uploads/peserta') }}"+"/"+data.foto_ketua_tim);

        if(data.nama_anggota_1){
          $("#data-anggota-1").show();
          $("#nama_anggota_1").val(data.nama_anggota_1);
          $("#no_anggota_1").val(data.no_anggota_1);
          $("#email_anggota_1").val(data.email_anggota_1);
          $("#foto_anggota_1").attr("src","{{ asset('uploads/peserta') }}"+"/"+data.foto_anggota_1);
        } else{
          $("#data-anggota-1").hide();
          $("#nama_anggota_1").val("");
          $("#no_anggota_1").val("");
          $("#email_anggota_1").val("");
          $("#foto_anggota_1").attr("src","#");
        }

        if(data.nama_anggota_2){
          $("#data-anggota-2").show();
          $("#nama_anggota_2").val(data.nama_anggota_2);
          $("#no_anggota_2").val(data.no_anggota_2);
          $("#email_anggota_2").val(data.email_anggota_2);
          $("#foto_anggota_2").attr("src","{{ asset('uploads/peserta') }}"+"/"+data.foto_anggota_2);
        } else{
          $("#data-anggota-2").hide();
          $("#nama_anggota_2").val("");
          $("#no_anggota_2").val("");
          $("#email_anggota_2").val("");
          $("#foto_anggota_2").attr("src","#");
        }

        if(!data.berkas_konfirmasi){
          $("#berkas_konfirmasi").attr("disabled", true);
        } else {
          $("#berkas_konfirmasi").attr("href","{{ asset('uploads/berkas_konfirmasi') }}"+"/"+data.berkas_konfirmasi);
        }

        if(data.link_berkas && data.link_video){
          $("#link_berkas").show();
          $("#link_video").show();
        }

        if(data.konfirmasi == 1 || !data.berkas_konfirmasi){
          $("#konfirmasi").attr("disabled", true);
        }

        $("#konfirmasi").attr("onclick","konfirmasi()");
        $("#id").val(data.id);
      });
    }

    function konfirmasi(){
      var yakin = confirm("Yakin untuk mengonfirmasi?");
      if (yakin == true) {
        $("#form_konfirmasi").submit();
      }
    }

  </script>
  @endsection