<div class="right_col" rol="main">
  <div class="x_title">
    <h1>Halaman User</h1>
  </div>
                  <div class="x_content">
                      <div class="row">
                        <a href="index.php?halaman=add_user" class="btn btn-success"><span class="fa fa-plus"></span> Tambah User</a>
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Username</th>
                          <th>Foto</th>
                          <th>Aksi</th>
                        </tr> 
                      </thead>
                      <?php 
                      include"koneksi.php";
                      $no = 1;
                      $query =$koneksi->query("SELECT * FROM user ORDER BY id_user ASC");
                      while ($data =$query->fetch_assoc()){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $data['nama']; ?></td>
                          <td><?php echo $data['username']; ?></td>
                          <td>
                            <img src="gambar_user/<?php echo $data['foto']; ?>" alt="" width="50">
                          </td>
                          <td>
                            <a href="index.php?halaman=ubah_user&id_user=<?php echo $data['id_user']; ?>" span class="btn btn-success"><span class="fa fa-pencil"></span></a>
                            <a href="index.php?halaman=remove_user&id_user=<?php echo $data['id_user']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span>
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

