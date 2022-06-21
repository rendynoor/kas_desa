 <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Tambah data kas masuk</h3>
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
                                    <form action="" method="post" enctype="multipart/form-data">                                
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal<span></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="date" class="form-control" data-validate-length-range="6" data-validate-words="2" name="tanggal" placeholder="Masukkan tanggal" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Masukkan Nominal Kas Masuk<span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="kas_masuk" placeholder="Kas masuk" data-validate-length-range="5,15" type="number" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Keterangan<span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea class="form-control" name="keterangan" required="required" /></textarea></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"><span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <button type='submit' name="simpan" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                            <?php 
							if (isset($_POST['simpan'])){
							$tanggal =$_POST['tanggal'];
							$keterangan =$_POST['keterangan'];
							$kas_masuk =$_POST['kas_masuk'];
							$jenis = "masuk";
							$query = $koneksi->query("INSERT INTO kas (keterangan,tanggal,kas_masuk,jenis,kas_keluar) VALUES ('$keterangan','$tanggal','$kas_masuk','masuk',0)");	
							echo "<script>document.location='index.php?halaman=kas_masuk';</script>";

							}
						 ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>