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

                    <?= $this->session->userdata('message'); ?>
                    <a href="<?= base_url('admin/tambahUser') ?>" class="btn btn-success mb-4">
                        Tambah Data User
                    </a>
                    <div class="col-lg">
                        <table id="mytable" class="table table-hover table-responsive-lg " width="100%">
                            <thead>
                                <tr>
                                    
                                    <th scope="col">No</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Password </th>
                                    <th scope="col">Role Id</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($users as $j) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $j['email']; ?></td>
                                        <td><?= $j['name']; ?></td>                                       
                                        <td><?= $j['password'];?> </td>                                       
                                        <td><?= $j['role_id']; ?></td>
                                        <td>

                                            <!-- <a href="<?= base_url() ?>admin/lihatpolibox/<?= $j['id']; ?>" class="badge badge-warning" style="background-color: #008CBA;">Lihat</a> -->
                                            <a href="<?= base_url() ?>admin/ubahdatauser/<?= $j['id']; ?>" class="badge badge-success" style="background-color: #4CAF50;">Ubah</a>
                                            <!-- <a href="<?= base_url() ?>admin/hapusakun/<?= $j['id']; ?>" class="badge badge-success" style="background-color: #f18973">Hapus</a> -->
                                        
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