@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$title}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="{{url('master/kategori/add')}}" class="btn btn-info float-right"><i class="fa fa-plus"></i> Tambah Kategori</a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div> -->
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                	  <th>No</th>
                	  <th>Nama</th>
                	  <th>Created At</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $e=>$dt)
                  <tr>
					          <td>{{$e+1}}</td>
					          <td>{{$dt->nama}}</td>
					          <td>{{$dt->created_at}}</td>
                    <td>
                      <div style="width: 60px"><a href="{{url('master/kategori/'.$dt->id)}}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-edit"></i></a> <a href="{{url('master/kategori/'.$dt->id.'/delete')}}" class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash"></i></a></div>
                    </td>
				          </tr>
				          @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Modal Hapus Kategori -->

  <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
      <div class="modal-dialog modal-default modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
 
          <div class="modal-header">
            <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
 
          <div class="modal-body">
 
            <div class="py-3 text-center">
              <i class="ni ni-bell-55 ni-3x"></i>
              <h4 class="heading mt-4">Apakah kamu yakin ingin menghapus data ini?</h4>
            </div>
 
          </div>
 
          <div class="modal-footer">
            <form action="" method="post">
              {{ csrf_field() }}
              {{ method_field('delete') }}
              <button type="submit" class="btn btn-white">Ok, Got it</button>
            </form>
            <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
          </div>
 
        </div>
      </div>
    </div>

@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function(){
		var flash = "{{ Session::has('sukses')}}";
		if (flash) {
			var pesan = "{{ Session::get('sukses')}}"
			alert(pesan);
		}

		var gagal = "{{ Session::has('gagal')}}";
		if (gagal) {
			var pesan = "{{ Session::get('gagal')}}"
			alert(pesan);
		}

    $('body').on('click','.btn-hapus',function(e){
      e.preventDefault();
      var url = $(this).attr('href');
      $('#modal-notification').find('form').attr('action',url);
 
      $('#modal-notification').modal();
    })
	})
</script>

@endsection