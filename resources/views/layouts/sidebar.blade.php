  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{asset('adminlte/dist/img/logosmk1.png')}}" alt="SMK Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SMKN 2 Guguak</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('profil/'.Auth::user()->foto)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('master/profil/'.Auth::user()->id)}}" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Beranda</li>
          <li class="nav-item">
            <a href="{{url('/beranda')}}" class="nav-link">
              <i class="fa fa-fw fa-home"></i>
              <p>
                Home
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
          
          @if(auth()->user()->role == 1)
          <li class="nav-header">Master Data Akun</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-fw fa-book"></i>
              <p>
                 Master Data Akun
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('master/operator')}}" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <i class="fa fa-fw fa-newspaper-o"></i>
                  <p>Operator</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('master/anggota')}}" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <i class="fa fa-fw fa-newspaper-o"></i>
                  <p>Anggota</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          
          <li class="nav-header">Master Data</li>
          @if(auth()->user()->role == 1 || auth()->user()->role == 2)
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-fw fa-book"></i>
              <p>
                 Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('master/kategori')}}" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <i class="fa fa-fw fa-newspaper-o"></i>
                  <p>Kategori</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('master/buku')}}" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <i class="fa fa-fw fa-newspaper-o"></i>
                  <p>Buku</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <li class="nav-item">
            <a href="{{url('pinjam-buku')}}" class="nav-link">
              <i class="fa fa-fw fa-book"></i>
              <p>
                Peminjaman
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('pengembalian')}}" class="nav-link">
              <i class="fa fa-fw fa-book"></i>
              <p>
                Pengembalian
              </p>
            </a>
          </li>

          <li class="nav-header">Other</li>
          <li class="nav-item">
            <a href="{{ url('logout') }}" class="nav-link">
              <i class="fa fa-fw fa-sign-out"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>