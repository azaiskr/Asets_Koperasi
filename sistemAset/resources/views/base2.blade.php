<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title> @yield('pageTitle') </title>
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/navBar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/crud.css')}}">
    
    <!-- CSS ICON -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
  <div class="sidebar close">

      <div class="logo-details">
        <img src="{{asset('elements/logo.png')}}" alt="brandLogo" class="brandLogo">
        <span class="logo_name">Koperasi Mahasiswa</span>
      </div>

      <ul class="nav-links">

          <li class="menu" >
              <a class="title" href="{{url('/')}}">
                <i class="bi bi-house-door"></i>
                <span class="link_name">Home</span>
              </a>
              <ul class="sub-menu blank">
                <li>
                  <a class="link_name" href="{{url('/')}}"><b>Home</b></a>
                </li>
              </ul>
          </li>


          <li class="menu" >
            <a class="title" href="{{url('/rekapitulasiAset')}}">
              <i class="bi bi-clipboard-data"></i>
              <span class="link_name">Rekapitulasi</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="{{url('/rekapitulasiAset')}}"><b>Rekapitulasi</b></a></li>
            </ul>
          </li>


          <li class="menu" >
            <div class="iocn-link">
              <a class="title" href="#">
                <i class="bi bi-inboxes"></i>
                <span class="link_name">Tracking Aset</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#"><b>Tracking Aset</b></a></li>
              <li><a href="/AsetTetap">Aset Tetap</a></li>
              <li><a href="/aset_jual_beli">Aset Jual Beli</a></li>
              <li><a href="/aset_piutang">Piutang</a></li>
            </ul>
          </li>


          <li class="menu" >
            <div class="iocn-link">
              <a class="title" href="#">
                <i class="bi bi-gift"></i>
                <span class="link_name">Peminjaman Aset</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#"><b> Peminjaman Aset</b> </a></li>
              <li><a href="/AsetTerpinjam/tambah">Pinjam Aset</a></li>
              <li><a href="/aset_tersedia">Daftar Aset Tersedia</a></li>
              <li><a href="/aset_terpinjam">Daftar Aset Terpinjam</a></li>
            </ul>
          </li>


          <li class="menu" >
            <div class="iocn-link">
              <a class="title" href="#">
                <i class="bi bi-tools"></i>
                <span class="link_name">Pemeliharaan Aset</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#"><b> Pemeliharaan Aset</b></a></li>
              <li><a href="/asetPerbaikan/create">Perbaiki Aset</a></li>
              <li><a href="/asetPerbaikan">Daftar Aset Perbaikan</a></li>
              <li><a href="/daftarServicer">Servicer</a></li>
            </ul>
          </li>


        <li  class="menu">
          <div class="iocn-link">
            <a class="title" href="#">
              <i class="bi bi-folder-symlink"></i>
              <span class="link_name">Pengalihan Aset</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#"><b> Pengalihan Aset</b></a></li>
            <li><a href="/AsetPengalihan/tambah">Alihkan Aset</a></li>
            <li><a href="/AsetPengalihan">Daftar Aset Dialihkan</a></li>
          </ul>
        </li>

        <li  class="menu">
          <div class="iocn-link">
            <a class="title" href="#">
              <i class="bi bi-journal-bookmark-fill"></i>
              <span class="link_name">UAS : Perpustakaan</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#"><b> UAS : Perpustakaan</b></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
        </li>


        <div class="profile-details">
          <div class="profile-content">
            <img src="{{ auth()->user()->foto }}" alt="profileImg">
          </div>

          <div class="name-job">
            <div class="profile_name">{{ auth()->user()->name }}</div>
            <div class="status">{{ auth()->user()->email }}</div>
          </div>

          @if(Route::has('login'))
          @auth
              <a class="logout" href="/logout">
                <i class="bi bi-box-arrow-in-right"></i>
              </a>
          @endauth
          @endif
        </div>

    </li>
  </ul>
  </div>

  <section class="home-section">
        <div class="topbar">
            <div class="toggle">
                {{-- <i class="bi bi-list"></i> --}}
            </div>
            <form action="/cari" method="get">
            <div class="select">
              <select name="tabel" id="tabel">
                <option value="aset_tetap">Aset Tetap</option>
                <option value="aset_jual_beli">Aset Jual Beli</option>
                <option value="piutang">Piutang</option>
                <option value="aset_tersedia">Aset Tersedia</option>
                <option value="aset_terpinjam">Aset Terpinjam</option>
                <option value="aset_perbaikan">Aset Perbaikan</option>
                <option value="servicer">Servicer</option>
                <option value="aset_pengalihan">Aset Pengalihan</option>
              </select>
            </div>
            <div class="search">
              <label>
                <input type="text" name="cari" placeholder="Cari di sini ...">
                
              </label>
              <button type="submit"><i class="bi bi-search"></i></button>
            </div>
            
            
            
                
          
                
              
  
        </div>
        </form>
        
        <div class="sectionView">
          @yield('pageView')
        </div>

  </section>
  
  
  <script>

    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e)=>{
    let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
    arrowParent.classList.toggle("showMenu");
      });
    }

    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".logo-details");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
      sidebar.classList.toggle("close");
    });

  </script>

  <!-- ====== ionicons ====== --> 
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>