            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Ubah Data Kas Keluar</h3>
                        </div>

                       
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Udah Data</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content"></div>
                                <br />
                                <?php 
							$id = $_GET['id'];
							$query = $koneksi->query("SELECT * FROM kas WHERE $id = $id");
							while($data = $query->fetch_assoc()){
							 ?>
							 <?php if (isset($_POST['ganti'])){
								$tanggal =$_POST['tanggal'];
								$keterangan =$_POST['keterangan'];
								$kas_keluar =$_POST['kas_keluar'];

							$query = $koneksi->query("UPDATE kas SET
								id = '$id',
								tanggal = '$tanggal',
								kas_keluar = '$kas_keluar',
								keterangan = '$keterangan'
								WHERE id = '$id'
								");
							
							echo "<script>document.location='index.php?halaman=kas_keluar';</script>";
						}	
						 ?>
						<?php } ?>
                                <div class="x_content">
                                    <form action="" method="post" enctype="multipart/form-data">                                
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Nama<span></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="date" class="form-control" data-validate-length-range="6" data-validate-words="2" name="tanggal" placeholder="Masukkan tanggal" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Masukkan Jumlah Nominal<span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="kas_keluar" placeholder="Kas Keluar" data-validate-length-range="5,15" type="number" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Keterangan<span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea class="form-control" name="keterangan" required="required" /></textarea></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"><span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <button type='submit' name="ganti" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>