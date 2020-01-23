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
        </div>
      </div><!-- /.container-fluid -->
    </section>

	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
              <form role="form" action="{{url('master/kategori/'.$dt->id)}}" method="POST">
              	{{csrf_field()}}
              	{{method_field('put')}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kategori</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="{{$dt->nama}}">
                  </div>
                </div>

                <div class="card-footer">
                  <a href="javascript:history.back()" class=" btn btn-danger"><i class="fa fa-left"></i> Kembali</a>
                  <button type="submit" class="btn btn-primary float-right">Simpan Perubahan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>

@endsection