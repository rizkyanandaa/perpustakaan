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
              <a href="{{url('master/operator/add')}}" class="btn btn-info float-right"><i class="fa fa-plus"></i> Tambah Operator</a>
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
                	  <th>Email</th>
                    <th>Created_At</th>
                	  <th>Updated_Ad</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $e=>$dt)
                  <tr>
					          <td>{{$e+1}}</td>
                    <td>{{$dt->name}}</td>
                    <td>{{$dt->email}}</td>
                    <td>{{$dt->created_at}}</td>
					          <td>{{$dt->updated_at}}</td>
                    <td>
                      <div style="width: 60px"><a href="{{url('master/operator/'.$dt->id)}}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-edit"></i></a> <a href="{{url('master/operator/delete/'.$dt->id)}}" class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash"></i></a></div>
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