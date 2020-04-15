  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li> -->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Sistem Informasi Perpustakaan SMK Negeri 2 Kecamatan Guguak</a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        @if(auth()->user()->role == 1)
        <a class="nav-link" data-widget="control-sidebar" data-slide="true">Administrator</a>
        @elseif(auth()->user()->role == 2)
        <a class="nav-link" data-widget="control-sidebar" data-slide="true">Operator</a>
        @elseif(auth()->user()->role == 3)
        <a class="nav-link" data-widget="control-sidebar" data-slide="true">Anggota</a>
        @endif
      </li>
    </ul>
  </nav>