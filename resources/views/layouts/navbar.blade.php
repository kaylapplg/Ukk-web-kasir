<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href={{url("bs/css/bootstrap.min.css")}}>
    <title>Navbar</title>
    <link rel="stylesheet" href={{url("/css/style.css")}} />
    <!-- Boxicons CSS -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src={{url("/css/script.js")}} defer></script>
  </head>
  <body>
    <nav class="sidebar locked">
      <div class="logo_items flex">
        <span class="nav_image">
          <img src="{{url('foto/images/orang.png')}}" alt="logo_img" />
        </span>
        <span class="logo_name">Kasir</span>
      </div>
      
      <div class="menu_container">
        <div class="menu_items">
          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Dashboard</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="home" class="link flex">
                <i><img src="{{url('/foto/images/rumah.png')}}" alt="Image" height="30" width="30" /></i>
                <span>Home</span>
              </a>
            </li>
            <li class="item">
              <a href="penjualan" class="link flex">
                <i><img src="{{url('/foto/images/penjualan.png')}}" alt="Image" height="30" width="30" /></i>
                <span>Penjualan</span>
              </a>
            </li>
            <li class="item">
              <a href="datapenjualan" class="link flex">
                <i><img src="{{url('/foto/images/data.png')}}" alt="Image" height="30" width="30" /></i>
                <span>Data Penjualan</span>
              </a>
            <div class="menu_title flex">
              <span class="title">Produk</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="tampildataproduk" class="link flex">
                <i><img src="{{url('/foto/images/dataproduk.png')}}" alt="Image" height="30" width="30"></i>
                <span>Data Produk</span>
              </a>
            </li>
            <li class="item">
              <a href="tambahproduk" class="link flex">
                <i><img src="{{url('foto/images/tambah.png')}}" alt="Image" height="30" width="30"></i>
                <span>Tambah Produk</span>
              </a>
            </li>
            <div class="menu_title flex">
              <span class="title">Pelanggan</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="datapelanggan" class="link flex">
                <i><img src="{{url('foto/images/pelanggan.png')}}" alt="Image" height="30" width="30"></i>
                <span>Data Pelanggan</span>
              </a>
              <li class="item">
                <a href="tambahpelanggan" class="link flex">
                  <i><img src="{{url('foto/images/tambah.png')}}" alt="Image" height="30" width="30"></i>
                  <span>Tambah Pelanggan</span>
                </a>
<script>
        function confirmLogout() {
        var confirmLogou = ("Anda yakin ingin logout?");
        if (confirmLogout) {
            window.location.href = "/logout"; 
        }
    }
</script>
<right>
<a class="nav-link" href={{url("/logout")}}><button class="btn btn-outline-success" onclick="confirmLogout()"><font face="comic sans ms" color="white"><img src="{{ asset('/foto/images/logout.png')}}"  alt="Image" height="20" width="20">Logout</font></button></a>
</right>  
</body>
</html>
