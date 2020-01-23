@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{url('profil/'.Auth::user()->foto)}}"
                       alt="User profile picture">
                </div>
                @foreach($user as $u)
                <h3 class="profile-username text-center">{{$u->name}}</h3>
                @endforeach
                @if(auth()->user()->role == 1)
            		<p class="text-muted text-center">Administrator</p>
            		@elseif(auth()->user()->role == 2)
            		<p class="text-muted text-center">Operator</p>
            		@elseif(auth()->user()->role == 3)
            		<p class="text-muted text-center">Anggota</p>
            		@endif
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">                  
                  <li class="nav-item"><a class="nav-link active" href="#profil" data-toggle="tab">Profil</a></li>
                  <li class="nav-item"><a class="nav-link" href="#edit" data-toggle="tab">Edit Profil</a></li>
                  <li class="nav-item"><a class="nav-link" href="#editfoto" data-toggle="tab">Change Foto</a></li>
                  <li class="nav-item"><a class="nav-link" href="#editpassword" data-toggle="tab">Change Password</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">                  
                  <div class="active tab-pane" id="profil">
                  	@foreach($user as $u)
                    <div class="form-group row">
                      <label class="col-sm-2 col-md-3 col-form-label">Nama</label>
                      <label class="col-sm-2 col-md-9 col-form-label">{{$u->name}}</label>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-md-3 col-form-label">Email</label>
                      <label class="col-sm-2 col-md-9 col-form-label">{{$u->email}}</label>
                    </div>
                    @endforeach
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="edit">
                    @foreach($user as $u)
                    <form class="form-horizontal" action="{{url('master/profil/edit/'.$u->id)}}">
                    {{csrf_field()}}
              	    {{method_field('put')}}
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input name="name" type="text" class="form-control" id="inputName" value="{{$u->name}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input name="email" type="text" class="form-control" id="inputName" value="{{$u->email}}">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary float-right">Simpan Perubahan</button>
                        </div>
                      </div>
                    </form>
                    @endforeach
                  </div>

                  <div class="tab-pane" id="editfoto">
                    @foreach($user as $u)
                    <form class="form-horizontal" method="POST" action="{{url('master/profil/editfoto/'.$u->id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
              	    {{method_field('put')}}
                      <div class="form-group">
                        <div class="custom-file">
                          <input type="file" name="foto" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile"></label>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary float-right">Simpan Perubahan</button>
                        </div>
                      </div>
                    </form>
                    @endforeach
                  </div>

                  <div class="tab-pane" id="editpassword">
                    @foreach($user as $u)
                    <form class="form-horizontal" method="POST" action="{{url('master/profil/editpass/'.$u->id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
              	    {{method_field('put')}}
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input name="password" type="password" class="form-control" id="inputName" placeholder="New Password">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary float-right">Simpan Perubahan</button>
                        </div>
                      </div>
                    </form>
                    @endforeach
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection