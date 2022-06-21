 <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Tambah Ubah Data User</h3>
                        </div>

                       
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Tambah Data</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <br />
                                <div class="x_content">
                                <?php if (isset($_POST['simpan'])){
                                $username =$_POST['username'];
                                $password =md5($_POST['password']);
                                $nama =$_POST['nama'];
                                $foto =$_FILES['foto']['name'];

                                $query = $koneksi->query("INSERT INTO user VALUES ('', '$username','$password','$nama','$foto')");
                                move_uploaded_file($_FILES['foto']['tmp_name'],__DIR__.'./gambar_user/'. $foto);
                                echo "<script>document.location='index.php?halaman=user';</script>";

                                }
                             ?>
                                    <form action="" method="post" enctype="multipart/form-data">
                                       		                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama<span></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama" placeholder="Masukkan Nama Anda" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Username<span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="username" placeholder="Masukkan Username" data-validate-length-range="5,15" type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="password" placeholder="Masukkan Password" required="required" type="password" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Masukkan foto anda<span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="file" name="foto" class="form-control"></div>
                                                	</div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"><span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <button type='submit' name="simpan" class="btn btn-primary">Submit</button>
                                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>