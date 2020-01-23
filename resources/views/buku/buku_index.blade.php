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
              <!-- <button class="btn btn-flat btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button> -->
              <a href="{{url('master/buku/add')}}" class="btn btn-info float-right"><i class="fa fa-plus"></i> Tambah Buku</a>
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
                    <th>Status</th>
                	  <th>Gambar</th>
                	  <th>Judul</th>
                	  <th>Penulis</th>
                    <th>Kategori</th>
                	  <th>Stok</th>
                    <th>Status</th>
                	  <th>Masuk</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $e=>$dt)
                  <tr>
					          <td>{{$e+1}}</td>
                    <td>
                      @if($dt->status == 1)
                        <a href="{{url('master/buku/status/'.$dt->id)}}" class="btn btn-sm btn-danger">Non Aktifkan</a>
                      @else
                        <a href="{{url('master/buku/status/'.$dt->id)}}" class="btn btn-sm btn-success">Aktifan</a>
                      @endif
                    </td>
                    <td><img src="{{asset('uploads/'.$dt->gambar)}}" style="width: 50px;"></td>
                    <td>{{$dt->judul}}</td>
                    <td>{{$dt->penulis}}</td>
                    <td>{{$dt->kategori_r->nama}}</td>
					          <td>{{$dt->stok}}</td>
                    <td>
                      @if($dt->status == 1)
                        <label style="color: green">Aktif</label>
                      @else
                        <label style="color: red">Tidak Aktif</label>
                      @endif
                    </td>
					          <td>{{$dt->created_at}}</td>
                    <td>
                      <div style="width: 60px"><a href="{{url('master/buku/'.$dt->id)}}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-edit"></i></a> <a href="{{url('master/buku/delete/'.$dt->id)}}" class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash"></i></a></div>
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

@endsection

@section('script')

<script type="text/javascript">
	$(document).ready(function(){
		$('.btn-refresh').click(function(e){
			e.preventDefault();
			location.reload();
		})
	})
</script>

@endsection