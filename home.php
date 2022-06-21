 <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
            <div class="col-md-5 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Kas Masuk</span>
              <div class="count">Rp<?php $jumlah = $koneksi->query("SELECT sum(kas_masuk)AS jml FROM kas WHERE jenis='masuk'");
                                $jum = $jumlah->fetch_assoc();
                                $masuk = $jum["jml"];
                                echo number_format($masuk);?></div>
                <a href="index.php?halaman=kas_masuk"><i style="align-items: center;">Lihat Kas Masuk</i></a>
                          </div>
            <div class="col-md-5 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Kas Keluar</span>
              <div class="count">Rp<?php $jumlah = $koneksi->query("SELECT sum(kas_keluar)AS jml FROM kas WHERE jenis='keluar'");                $jum = $jumlah->fetch_assoc();
                                 $keluar = $jum["jml"];
                                 echo number_format($keluar);

                         ?></div>
              <a href="index.php?halaman=kas_keluar"><i style="align-items: center;">Lihat Kas Keluar</i></a>
            </div>
            <div class="col-md-5 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Saldo</span>
              <div class="count green">Rp<?php echo number_format($masuk-$keluar);
                         ?></div>
              <a href="index.php?halaman=rekapitulasi"><i style="align-items: center;">Lihat Rekapitulasi</i></a>
            </div>
            </div>
          </div>
              <div class="col-md-4">
                  <h3>Data Kas</h3>
                     <div class="row" style="text-align: center;">
                          <div class="col-md-11">
                            <canvas id="doughnut-chartcanvas-1" height="100" width="100"></canvas>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>   
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
        <script type="text/javascript">
   console.log(<?php echo $masuk; ?>);
  
      var ctx1 = document.getElementById("doughnut-chartcanvas-1");

      var data1 = {
        labels : ["Kas Masuk", "Kas Keluar"],
        datasets : [
          {
            label : "Data Kas",
            data : [<?php echo $masuk;?>,<?php echo $keluar; ?>],
            backgroundColor : [
                        "#6495ED",
                        "#FF7F50",
                        
                    ],           
          }
        ]
      };

      var options = {
        legend : {
          display : true,
          position : "bottom"
        }
      };


      var chart1 = new Chart( ctx1, {
        type : "doughnut",
        data : data1,
        options : options
      });

 


            </script>