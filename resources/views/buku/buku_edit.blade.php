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
              <form role="form" action="{{url('master/buku/'.$dt->id)}}" method="POST" enctype="multipart/form-data">
              	{{csrf_field()}}
              	{{method_field('put')}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" name="judul" value="{{$dt->judul}}" class="form-control" id="exampleInputEmail1" placeholder="Judul">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Penulis</label>
                    <input type="text" name="penulis" value="{{$dt->penulis}}" class="form-control" id="exampleInputEmail1" placeholder="Penulis">
                  </div>
                  <div class="form-group">
                    <label>Pilih Kategori</label>
                    <select name="kategori" class="form-control select2" style="width: 100%;">
                      <option selected="selected" disabled="">Pilih Kategori</option>
                      @foreach($kategori as $kt)
                      <option value="{{$kt->id}}" {{ ($dt->kategori == $kt->id) ? 'selected' : ''}}>{{$kt->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3">
                  	<label for="exampleInputFile">Keterangan</label>
  	                <textarea class="textarea" name="keterangan" value="{{$dt->keterangan}}" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$dt->keterangan}}</textarea>
  	              </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Stok</label>
                    <input type="number" name="stok" value="{{$dt->stok}}" class="form-control" id="exampleInputEmail1" placeholder="Stok">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Pilih Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                      </div>
                    </div>
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

@section('script')

<script>
	$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
</script>

@endsection