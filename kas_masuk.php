  <div class="right_col" rol="main" style="min-height:10.3em;">
  <div class="x_title">
    <h1>Kas Masuk</h1>
  </div>
                  <div class="x_content">
                      <div class="row">
                        <a href="index.php?halaman=tambah_kas_masuk" class="btn btn-success"><span class="fa fa-plus"></span> Tambah data</a>
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-hover table-bordered" >
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Keterangan</th>
                          <th>Jumlah</th>
                          <th>Aksi</th>
                        </tr> 
                      </thead>
                      <?php 
                      include"koneksi.php";
                      $no = 1;
                      $query =$koneksi->query("SELECT * FROM kas WHERE jenis ='masuk'");
                      while ($data =$query->fetch_assoc()){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $data['tanggal']; ?></td>
                          <td><?php echo  $data['keterangan']; ?></td>
                          <td>Rp<?php echo number_format($data['kas_masuk']); ?></td>
                         
                          <td>
                            <a href="index.php?halaman=ubah_kas_masuk&id=<?php echo $data['id']; ?>" span class="btn btn-success"><span class="fa fa-pencil"></span></a>
                            <a href="index.php?halaman=remove_kas_masuk&id=<?php echo $data['id']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span>
                          </td>
                        </tr>
                        <?php $no++;};?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>
      </td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>

