<div class="right_col" rol="main">
  <div class="x_title">
    <h1>Rekapitulasi</h1>
  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead style="text-align: center;">
                        <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Keterangan</th>
                          <th>Masuk</th>
                          <th>Keluar</th>
                        </tr> 
                      </thead>
                      <?php 
                      include"koneksi.php";
                      $no = 1;
                      $query =$koneksi->query("SELECT * FROM kas");
                      while ($data =$query->fetch_assoc()){
                      ?>
                      <tbody>
                        <tr style="text-align: center;">
                          <td><?php echo $no; ?></td>
                          <td><?php echo $data['tanggal']; ?></td>
                          <td><?php echo $data['keterangan']; ?></td>
                          <td>Rp<?php echo number_format($data['kas_masuk']); ?></td>
                          <td>Rp<?php echo number_format($data['kas_keluar']); ?></td>
                        </tr>
                        <?php $no++;};?>

                      </tbody>
                      <tr>
                        <th colspan="4">Kas Masuk</th>
                        <td style="text-align: center;">Rp<?php $jumlah = $koneksi->query("SELECT sum(kas_masuk)AS jml FROM kas WHERE jenis='masuk'");
                        $jum = $jumlah->fetch_assoc();
                        $masuk = $jum["jml"];
                        echo number_format($masuk);

                         ?></td>
                         <tr>
                        <th colspan="4">Kas Keluar</th>
                        <td style="text-align: center;">Rp<?php $jumlah = $koneksi->query("SELECT sum(kas_keluar)AS jml FROM kas WHERE jenis='keluar'");
                        $jum = $jumlah->fetch_assoc();
                        $keluar = $jum["jml"];
                        echo number_format($keluar);

                         ?></td>
                      </tr>
                      <tr>
                        <th colspan="4">Saldo</th>
                        
                        <td align="center">Rp<?php echo number_format($masuk-$keluar);

                         ?></td>
                      </tr>
                    </table>
                  </div>
                  <a href="cetak.php" class="btn btn-info pull-right" target="_blank"><span class="fa fa-print"> Cetak</span></a>
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

