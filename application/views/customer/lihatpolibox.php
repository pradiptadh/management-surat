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

                <h1 class="text-center mb-4 pt-4">Pengembalian Polibox</h1>
                <?php $i = 1; ?>
                                <?php foreach ($surat_pengembalian as $s) : ?>
                                    
                        <?php $i++; ?>
                                <?php endforeach; ?>
                <a href="<?= base_url() ?>customer/printpolibox/<?= $s['id_surat']; ?>"><button class="btn btn-dark mb-4">Print Surat Pengembalian</button></a>

              

              
                <br></br>

                <table class="table table table-sm mb-1">
                    <tr>
                        <td><H4><b>Pengembalian Polibox</H4></b></th>
                        
                        <td style="vertical-align:middle;" align="center"><b><?= $s['perusahaan']; ?></b> : <?= $s['alamat']; ?> </td>
                    </tr>
                </table>



                        <table class="table">
                            
                            <tr>
                            <th >Kepada : PT TRISUKSES METAL PRESISI</th>
                            <th>Tanggal Peminjaman : <?= $s['tgl']; ?></th>
                            </tr>
                            <tr>
                            <th >No Surat Peminjaman : <?= $s['id_polibox']; ?></th>
                            <th>Tanggal Pengembalian : <?= $s['tgl_kembali']; ?></th>
                            </tr>
                            <tr>
                            <th >Diantar Ke : BEKASI</th>
                            <th >No Surat Pengembalian : <?= $s['id_surat']; ?></th>
                            </tr>
                            
                            
                           
                            
                        </table>
                       

                        <table class="table table-bordered table-sm mb-4">
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                
                                <th>Jumlah Peminjaman</th>
                                <th>Jumlah Pengembalian</th>
                                <th>Keterangan</th>
                            </tr>
                            <tr>
                                <th scope="row"><?= $i; ?><br>
                                <br> </th>
                                                              
                                <td><?= $s['part']; ?><br>
                                <br><br>
                                <br> </td>                           
                                                                                     
                                <td><?= $s['jml']; ?><br>
                                <br><br>
                                <br> </td>
                                <td><?= $s['jml_kembali']; ?><br>
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
                                    
                                </tr>
                            </table>
                        </div>
                        
                        

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