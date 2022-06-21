                <div class="right_col" rol="main">
                    <div class="x_title">
                      <h1>Kas keluar</h1>
                    </div>
                  <div class="x_content">
                      <div class="row">
                        <a href="index.php?halaman=tambah_kas_keluar" class="btn btn-success"><span class="fa fa-plus"></span> Tambah data kas keluar</a>
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
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
                      $query =$koneksi->query("SELECT * FROM kas WHERE jenis ='keluar'");
                      while ($data =$query->fetch_assoc()){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $data['tanggal']; ?></td>
                          <td><?php echo $data['keterangan']; ?></td>
                          <td>Rp<?php echo number_format($data['kas_keluar']); ?></td>
                         
                          <td>
                            <a href="index.php?halaman=ubah_kas_keluar&id=<?php echo $data['id']; ?>" span class="btn btn-success"><span class="fa fa-pencil"></span></a>
                            <a href="index.php?halaman=remove_kas_keluar&id=<?php echo $data['id']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span>
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

