<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="src/logo-djcorp.png" type="image/ico" />

    <title>Aplikasi Kas Desa </title>
  </head>

<div class="right_col" rol="main">
  <div class="x_title">
    <h2>Rekapitulasi</h2>
  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" style="width:100%; border: solid 0.5px; border-collapse: collapse;">
                      <thead style="text-align: center;">
                        <tr>
                          <th style="border: solid 0.5px;">No</th>
                          <th style="border: solid 0.5px;">Tanggal</th>
                          <th style="border: solid 0.5px;">Keterangan</th>
                          <th style="border: solid 0.5px;">Masuk</th>
                          <th style="border: solid 0.5px;">Keluar</th>
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
                          <td style="border: solid 0.5px;"><?php echo $no; ?></td>
                          <td style="border: solid 0.5px;"><?php echo $data['tanggal']; ?></td>
                          <td style="border: solid 0.5px;"><?php echo $data['keterangan']; ?></td>
                          <td style="border: solid 0.5px;">Rp<?php echo number_format($data['kas_masuk']); ?></td>
                          <td style="border: solid 0.5px;">Rp<?php echo number_format($data['kas_keluar']); ?></td>
                        </tr>
                        <?php $no++;};?>

                      </tbody>
                      <tr>
                        <th colspan="4"style="text-align:left; border: solid 0.5px;">Kas Masuk</th>
                        <td style="text-align: center;border: solid 0.5px;">Rp<?php $jumlah = $koneksi->query("SELECT sum(kas_masuk)AS jml FROM kas WHERE jenis='masuk'");
                        $jum = $jumlah->fetch_assoc();
                        $masuk = $jum["jml"];
                        echo number_format($masuk);

                         ?></td>
                         <tr>
                        <th colspan="4" style="text-align:left; border: solid 0.5px;">Kas Keluar</th>
                        <td style="text-align: center;border: solid 0.5px;">Rp<?php $jumlah = $koneksi->query("SELECT sum(kas_keluar)AS jml FROM kas WHERE jenis='keluar'");
                        $jum = $jumlah->fetch_assoc();
                        $keluar = $jum["jml"];
                        echo number_format($keluar);

                         ?></td>
                      </tr>
                      <tr>
                        <th colspan="4"style="text-align:left;border: solid 0.5px;" >Saldo</th>
                        
                        <td style="text-align: center;border: solid 0.5px;" align="center">Rp<?php echo number_format($masuk-$keluar);

                         ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <br>
                <br>	
              	<td class="pull-right">Bandar Lampung,</td>
              	<br>
              	<br>
              	<br>
              	<br>
              	<br>
              	<td>Penanggung Jawab</td>
               
              </div>
              <script>window.print()</script>
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

