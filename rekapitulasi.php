<div class="right_col" rol="main">
  <div class="x_title">
    <h1>Rekapitulasi</h1>
  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-hover table-bordered" style="width:100%">
                      <thead style="text-align: center;">
                        <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Keterangan</th>
                          <th>Masuk</th>
                          <th>Keluar</th>
                          <th>Sisa Uang</th>
                        </tr>
                      </thead>
                      <?php 
                      include"koneksi.php";
                      $no = 1;
                      $sisa = 0;
                      $query =$koneksi->query("SELECT * FROM kas");
                      while ($data =$query->fetch_assoc()){
                      ?>
                   
                        <tr style="text-align: center;">
                          <?php 
                          $sisa += $data['kas_masuk'];
                          $sisa -= $data['kas_keluar'];
                          ?>
                          <tbody>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $data['tanggal']; ?></td>
                          <td><?php echo $data['keterangan']; ?></td>
                          <td><?php 
                          if($data['kas_masuk']==0){}
                          else{
                            echo number_format($data['kas_masuk']);}
                          ?></td>
                          </td>
                          <td><?php if($data['kas_keluar']==0){}
                          else{
                            echo number_format($data['kas_keluar']);}
                         ?></td>
                          <td>Rp<?php echo number_format($sisa);
                          ?>
                        </tr>
                        <?php $no++;};?>

                     
                      <tr>
                        <th colspan="5">Kas Masuk</th>
                        <td style="text-align: center;">Rp<?php $jumlah = $koneksi->query("SELECT sum(kas_masuk)AS jml FROM kas WHERE jenis='masuk'");
                        $jum = $jumlah->fetch_assoc();
                        $masuk = $jum["jml"];
                        echo number_format($masuk);

                         ?></td>
                         <tr>
                        <th colspan="5">Kas Keluar</th>
                        <td style="text-align: center;">Rp<?php $jumlah = $koneksi->query("SELECT sum(kas_keluar)AS jml FROM kas WHERE jenis='keluar'");
                        $jum = $jumlah->fetch_assoc();
                        $keluar = $jum["jml"];
                        echo number_format($keluar);

                         ?></td>
                      </tr>
                      <tr>
                        <th colspan="5">Saldo</th>
                        
                        <td align="center">Rp<?php echo number_format($masuk-$keluar);

                         ?></td>
                      </tr>

                    </table>
                    </tbody>
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