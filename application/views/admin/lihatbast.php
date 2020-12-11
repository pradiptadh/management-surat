<!-- Content Wrapper -->
<style>
    .responsive {
        width: auto;
        height: auto;
    }
</style>
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">



        <!-- Begin Page Content -->
        <div class="container-fluid">



            <div class="container bg-white pb-2">

                <h1 class="text-center mb-4 pt-4">Surat BAST</h1>
                <?php $i = 1; ?>
                                <?php foreach ($berita as $s) : ?>
            
                
              
                <br></br>

                <table class="table table table-sm mb-1">
                    <tr>
                        <td><H4><b>Surat BAST</H4></b></th>
                        
                        <td style="vertical-align:middle;" align="center"><b><?= $s['perusahaan']; ?></b> : <?= $s['alamat_pengirim']; ?> </td>
                    </tr>
                </table>



                        <table class="table">
                            
                            <tr>
                            <th >Kepada : <br><?= $s['penerima']; ?></br> </th>

                            <th>Tanggal Berita : <?= $s['tgl_berita']; ?></th>
                            </tr>
                            <tr>                           
                            <th>No Surat Jalan : <?= $s['nosurat']; ?></th>
                            <th >Tanggal Surat Jalan : <?= $s['tgl']; ?></th>
                            </tr>
                            <tr>
                            
                            <th>No PO : <?= $s['po']; ?></th>
                            <th>No WO : <?= $s['wo']; ?></th>
                            </tr>
                                                       
                           
                            
                        </table>
                       

                        <table class="table table-bordered table-sm mb-4">
                            <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Yang Diterima</th>
                                <th>Keterangan</th>
                            </tr>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <br> </th>
                                                              
                                <td><?= $s['kd_part']; ?><br>
                                <br><br>
                                <br> </td>                           
                                <td><?= $s['part']; ?><br>
                                <br><br>
                                <br> </td>  
                                                       
                                <td><?= $s['jml']; ?><br>
                                <br><br>
                                <br> </td>
                                <td><?= $s['keterangan']; ?><br>
                                <br><br>
                                <br> </td>
                                
                              
                            </tr>
                            


                        </table>
                      
                        <div style="overflow-x:auto;">

                            <table class="table table-bordered table-sm ">
                                <tr>
                                    <th class="text-center">Memeriksa</th>
                                    <th class="text-center">Driver</th>
                                    <th class="text-center">Mengetahui</th>
                                    <th class="text-center">Dibuat Oleh</th>
                                   
                                </tr>

                                <tr>
                                    <td class="text-center p-3">
                                        <br>
                                        <br>  </td>
                                    <td class="text-center p-3">
                                        <br>
                                        <br>
                                       <br>
                                              </td>
                                    <td class="text-center p-3">
                                        <br>
                                        <br>
                                       <br>
                                              </td>
                                    <td class="text-center p-3">
                                        <br>
                                        <br>
                                        <br>
                                              </td>
                                   
                                </tr>
                            </table>
                        </div>
                        
                        <?php $i++; ?>
                                <?php endforeach; ?>


            </div>





        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</div>
<script src="<?= base_url('/') ?>test/js/jquery.min.js"></script>
<script src="<?= base_url('/') ?>test/js/bootstrap.min.js"></script>
<script type="text/javascript">
    (function() {
        var beforePrint = function() {
            // window.close();
        };

        var afterPrint = function() {
            // window.close();
        };

        if (window.matchMedia) {
            var mediaQueryList = window.matchMedia('print');
            mediaQueryList.addListener(function(mql) {
                if (mql.matches) {
                    beforePrint();
                } else {
                    afterPrint();
                }
            });
        }

        window.onbeforeprint = beforePrint;
        window.onafterprint = afterPrint;
    }());
</script>