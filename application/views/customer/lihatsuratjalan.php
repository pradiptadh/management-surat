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

                <h1 class="text-center mb-4 pt-4">Surat Jalan</h1>
                <?php $i = 1; ?>
                                <?php foreach ($surat_jalan as $s) : ?>
           
              
                <br></br>

                <table class="table table table-sm mb-1">
                    <tr>
                        <td><H4><b>Surat Jalan Barang</H4></b></th>
                        
                        <td style="vertical-align:middle;" align="center"><b>PT TRISUKSES METAL PRESISI</b> : BEKASI </td>
                    </tr>
                </table>



                <table class="table">
                            
                            <tr>
                            <th >Kepada : <?= $s['nama_perusahaan']; ?></th>
                            <th>Tanggal SJ : <?= $s['tgl']; ?></th>
                            </tr>
                            <tr>
                            <th >Contact Person : </th>
                            <th>No Surat : <?= $s['nosurat']; ?></th>
                            </tr>
                            <tr>
                            <?php $i = 1; ?>
                                <?php foreach ($perusahaan as $a) : ?> 
                            <th >Diantar Ke : <?= $a['alamat']; ?></th>
                            <?php $i++; ?>
                                <?php endforeach; ?></td>  
                            <th>No PO : <?= $s['po']; ?></th>
                            </tr>
                            <tr>
                            <th >Telp/fax : <?= $s['telp']; ?></th>
                            <th>No Wo : <?= $s['wo']; ?></th>
                            </tr>
                            
                           
                            
                        </table>
                       

                        <table class="table table-bordered table-sm mb-4">
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Kode Barang</th>
                                <th>Jumlah barang</th>
                            </tr>
                            <tr>
                                <th scope="row"><?= $i; ?><br>
                                <br> </th>
                                                              
                                <td><?= $s['part']; ?><br>
                                <br><br>
                                <br> </td>                           
                                <td><?= $s['kd_part']; ?><br>
                                <br><br>
                                <br> </td>  
                                                       
                                <td><?= $s['jml']; ?><br>
                                <br><br>
                                <br> </td>
                                
                              
                            </tr>
                            


                        </table>
                      
                        <div style="overflow-x:auto;">

                            <table class="table table-bordered table-sm ">
                                <tr>
                                    <th class="text-center">Memeriksa</th>
                                    <th class="text-center">Driver</th>
                                    <th class="text-center">Menyetujui</th>
                                    <th class="text-center">Membuat</th>
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