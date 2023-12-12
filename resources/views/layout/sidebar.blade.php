<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->

          <!-- DASHBOARD -->
          <li class="nav-item">
            <a href="{{url('/category')}}" class="{{Request::is('/product') ? 'active': null}} nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/product')}}" class="{{Request::is('/product') ? 'active': null}} nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Master Product
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/category')}}" class="{{Request::is('/category') ? 'active': null}} nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Master Kategori Produk
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/banner')}}" class="{{Request::is('/banner') ? 'active': null}} nav-link">
            <i class="nav-icon fa fa-thin fa-camera-retro" style="color: #d9d9dd;"></i>
             <p>
                Master Banner
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/profile_perusahaan')}}" class="{{Request::is('/profile_perusahaan') ? 'active': null}} nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Master Profile Perusahaan
              </p>
            </a>
          </li>



          <li class="nav-item has-treeview {{Request::segment(1) === 'laporan_keuangan' || Request::segment(1) === 'laporan_kunjungan_ibu_Hamil' || Request::segment(1) === 'laporan_kunjungan_Persalinan' || Request::segment(1) === 'laporan_kunjungan_kb' || Request::segment(1) === 'laporan_imunisasi' ? 'menu-open active': null}}">

            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Laporan
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="background-color:#282828;">
              <li class="nav-item">
                <a href="{{url('/laporan_keuangan')}}" class="{{Request::segment(1) === 'laporan_keuangan' ? 'active': null}} nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Laporan Keuangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/laporan_kunjungan_ibu_Hamil')}}" class="{{Request::segment(1) === 'laporan_kunjungan_ibu_Hamil' ? 'active': null}} nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Laporan Kunjungan Ibu Hamil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/laporan_kunjungan_persalinan')}}" class="{{Request::segment(1) === 'laporan_kunjungan_Persalinan' ? 'active': null}} nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Laporan Kunjungan Persalinan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/laporan_kunjungan_kb')}}" class="{{Request::segment(1) === 'laporan_kunjungan_kb' ? 'active': null}} nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Laporan Kunjungan KB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/laporan_imunisasi')}}" class="{{Request::segment(1) === 'laporan_imunisasi' ? 'active': null}} nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Laporan Hasil Imunisasi</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
<!-- /.sidebar -->