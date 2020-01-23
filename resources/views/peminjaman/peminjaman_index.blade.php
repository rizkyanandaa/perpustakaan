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
                    @if(auth()->user()->role == 1 || auth()->user()->role == 2)
                    <th>User</th>
                    @endif
                    <th>Buku</th>
                    <th>Jumlah</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $e=>$dt)
                  <tr>
                    <td>{{$e+1}}</td>
                    @if(auth()->user()->role == 1 || auth()->user()->role == 2)
                    <td>{{$dt->user_r->name}}</td>
                    @endif
                    <td>{{$dt->buku_r->judul}}</td>
                    <td>{{$dt->jumlah}}</td>
                    <td>{{$dt->created_at}}</td>
                    @if($dt->status == 0)
                    <td style="color: red">Belum Disetujui</td>
                    @elseif($dt->status == 1)
                    <td style="color: green">Sedang Dipinjam</td>
                    @elseif($dt->status == 2)
                    <td>Sudah Dikembalikan</td>
                    @endif
                    <td>
                      @if(auth()->user()->role == 1 || auth()->user()->role == 2)
                        @if($dt->status == 0)
                          <a href="{{url('pinjam-buku/setujui/'.$dt->id)}}" class="btn btn-xs btn-primary btn-flat"><i class="fa fa-check"></i> Setujui</a>
                        @endif
                      @endif
                      @if($dt->status == 1)
                      <a href="{{url('pengembalian/'.$dt->id)}}" class="btn btn-xs btn-success btn-flat">Kembalikan</a>
                      @endif
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