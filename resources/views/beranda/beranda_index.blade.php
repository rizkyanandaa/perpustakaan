@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        @if(auth()->user()->role == 1 || auth()->user()->role == 2)
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{buku_habis()}}</h3>

                <p>Buku Habis</p>
              </div>
              <a href="{{url('master/buku/kosong')}}" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{buku_nonaktif()}}</h3>

                <p>Buku Nonaktif</p>
              </div>
              <a href="{{url('master/buku/nonaktif')}}" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{validasi_peminjaman()}}</h3>

                <p>Validasi Peminjaman</p>
              </div>
              <a href="{{url('pinjam-buku/validasi')}}" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{validasi_pengembalian()}}</h3>

                <p>Validasi Pengembalian</p>
              </div>
              <a href="{{url('pengembalian/validasi')}}" class="small-box-footer">Info Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        @endif
        <!-- /.row -->

        <div class="row">
          @foreach($data as $e=>$dt)       
          <div class="col-md-3">
            <!-- DIRECT CHAT PRIMARY -->
            <div class="card card-prirary cardutline direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Buku</h3>
              </div>
              
              <div class="card-body">
                <div class="direct-chat-messages">
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <center><img src="{{asset('uploads/'.$dt->gambar)}}" style="width: 150px;"></center>
                      <span class="direct-chat-name">{{$dt->judul}}</span><br>
                      <span class="direct-chat-timestamp">Stok : {{$dt->stok}} buah</span>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="card-footer">
                <form action="{{url('pinjam-buku/'.$dt->id)}}" method="get">
                @csrf
                  <div class="input-group">
                    <input type="number" name="jumlah" placeholder="Jumlah" class="form-control" maxlength="{{$dt->stok}}" minlength="0" required>
                    <span class="input-group-append">
                      <button type="submit" class="btn btn-primary">Pinjam</button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
  </div>

  @endsection