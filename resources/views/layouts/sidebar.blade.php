<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Alexander Pierce</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      
      <li class="nav-item">
        <a href="{{ url('/') }}" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>Home</p>
        </a>
      </li>
      
      <li class="nav-header">Data Pengguna</li>
      
      <li class="nav-item">
        <a href="{{ url('/level') }}" class="nav-link">
          <i class="nav-icon fas fa-layer-group"></i>
          <p>Level User</p>
        </a>
      </li>
      
      <li class="nav-item">
        <a href="{{ url('/user') }}" class="nav-link">
          <i class="nav-icon far fa-user"></i>
          <p>Data User</p>
        </a>
      </li>
      
      <li class="nav-header">Data Barang</li>
      
      <li class="nav-item">
        <a href="{{ url('/kategori') }}" class="nav-link">
          <i class="nav-icon far fa-bookmark"></i>
          <p>Kategori Barang</p>
        </a>
      </li>
      
      <li class="nav-item">
        <a href="{{ url('/barang') }}" class="nav-link">
          <i class="nav-icon far fa-list-alt"></i>
          <p>Data Barang</p>
        </a>
      </li>
      
      <li class="nav-header">Data Transaksi</li>
      
      <li class="nav-item">
        <a href="{{ url('/stok') }}" class="nav-link">
          <i class="nav-icon fas fa-cubes"></i>
          <p>Stok Barang</p>
        </a>
      </li>
      
      <li class="nav-item">
        <a href="{{ url('/penjualan') }}" class="nav-link">
          <i class="nav-icon fas fa-cash-register"></i>
          <p>Transaksi Penjualan</p>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->