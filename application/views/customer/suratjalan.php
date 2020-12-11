<!-- Content Wrapper -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">


<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">



        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
            </div>

            <!-- Content Row -->

            <div class="row">
                <div class="col-lg ">

                
                    <div class="col-lg">
                        <table id="mytable" class="table table-hover table-responsive-lg " width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nomer Surat</th>
                                    <th scope="col">Penerima </th>
                                    <!-- <th scope="col">Perusahaan Pengirim</th> -->
                                    <!-- <th scope="col">Kode Barang</th> -->
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">No Po</th>
                                    <th scope="col">No Wo</th>
                                    <!-- <th scope="col">Dikirim Ke</th> -->
                                    <!-- <th scope="col">Alamat Pengirim</th> -->
                                    <th scope="col">Tanggal surat</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($surat_jalan as $j) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $j['nosurat']; ?></td>
                                        <td><?= $j['nama_perusahaan']; ?></td>                                       
                                        <!-- <td><?= $j['pengirim']; ?></td>                                        -->
                                        <!-- <td><?= $j['kd_part']; ?></td> -->
                                        <td><?= $j['part']; ?></td>
                                        <td><?= $j['jml']; ?></td>
                                        <td><?= $j['po']; ?></td>
                                        <td><?= $j['wo']; ?></td>
                                        <!-- <td><?= $j['alamat']; ?></td> -->
                                        <!-- <td><?= $j['alamat_pengirim']; ?></td> -->
                                        <td><?= $j['tgl']; ?></td>
                                        <td><?= $j['keterangan']; ?></td>
                                        <td>

                                            <a href="<?= base_url() ?>customer/lihatsuratjalan/<?= $j['id_surat']; ?>/<?= $j['id_perusahaan']; ?>" class="badge badge-warning" style="background-color: #008CBA;">Lihat</a>
                                               </td>
                                    </tr>
                                

                                    <?php $i++; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>

                    </div>

                </div>
                <div class="card-footer small text-muted">
                </div>

            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#mytable').DataTable();
    });
</script>