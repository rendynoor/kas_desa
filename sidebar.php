<div class="container-boudy">
<div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php?halaman=home" class="site_title"><i class="fa fa-money"></i><span> Kas Desa</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="gambar_user/<?php echo $_SESSION['foto'];?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat datang,</span>
                <h2><?php echo $_SESSION['nama'];?></h2>
              </div>
            </div>

            <br />
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php?halaman=home"><i class="fa fa-home"></i> Home</a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Kas Desa<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?halaman=kas_masuk">Kas Masuk</a></li>
                      <li><a href="index.php?halaman=kas_keluar">Kas Keluar</a></li>
                      <li><a href="index.php?halaman=rekapitulasi">Rekapitulasi</a></li>
                    </ul>
                  </li>
                  <li><a href="index.php?halaman=user"><i class="fa fa-info-circle"></i> Halaman User</a>
                  </li>            
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
