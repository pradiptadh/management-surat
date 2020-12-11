<!-- Content Wrapper -->
<link rel="stylesheet" href="<?= base_url('') ?>/test/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url('') ?>/test/css/jquery.toast.css">

<div id="content-wrapper" class="d-flex flex-column" onload="window.print()">

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

                <table class="table table table-sm mb-1">
                    <tr>
                        <td><H4><b>Surat Jalan Barang</H4></b></th>
                        <?php $i = 1; ?>
                                <?php foreach ($surat_jalan as $s) : ?>
                        <td style="vertical-align:middle;" align="center"><b>PT Trisukses Metal Presisi : </b>  Bekasi </td>
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
                                <?php $i = 1; ?>
                                <?php foreach ($part as $a) : ?>                            
                                <td><?= $a['kd_part']; ?><br>
                                <br><br>
                                <br>  <?php $i++; ?>
                                <?php endforeach; ?></td>  
                                                       
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