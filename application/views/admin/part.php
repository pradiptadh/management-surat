        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->

            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


            <div class="row">
                <div class="col-lg">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>

                    <?= $this->session->flashdata('message'); ?>

                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newDataPartModal">Tambah Data Part</a>

                    <div class="col-lg" style="overflow-y: auto;">
                        <table class="table table-hover table-responsive-lg " width="100%">
                            <thead>
                                <tr>
                                    <th scope=" col">No</th>
                                    <th scope="col">Kode Part</th>
                                    <th scope="col">Nama Part</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($part as $s) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $s['kd_part']; ?></td>
                                        <td><?= $s['part']; ?></td>
                                        <td><?= $s['ket']; ?></td>
                                        <td>
                                            <a href="" class="badge badge-success" data-toggle="modal" data-target="#editDataPart<?= $i; ?>">Ubah</a>
                                            <a href="" class="badge badge-danger" data-toggle="modal" data-target="#deleteDataPart<?= $i; ?>">Hapus</a>

                                        </td>

                                    </tr>
                                    <!-- Modal edit-->
                                    <div class="modal fade" id="editDataPart<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="editDataPartLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editDataPartLabel">Edit Data Part</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?= base_url('admin/editDataPart/' . $s['kd_part']); ?>" method="post" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <input type="hidden" name="kd_part" value="<?= $s['kd_part']; ?>">
                                                            <label for="formGroupExampleInput">Kode Part</label>
                                                            <input required type="text" class="form-control" id="kd_part" name="kd_part" value="<?= $s['kd_part']; ?>" readonly>
                                                        </div>      
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">Nama Part</label>
                                                            <input required type="text" class="form-control" id="part" name="part" value="<?= $s['part']; ?>">
                                                        </div>                                        
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">Keterangan</label>
                                                            <input class="form-control" id="ket" name="ket"value="<?= $s['ket']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class=" modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="editSubMenu" class="btn btn-primary">Edit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal hapus-->
                                    <div class="modal fade" id="deleteDataPart<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteDataPartLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteDataPartLabel">Delete Data Part</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?= base_url('admin/deleteDataPart/' . $s['kd_part']); ?>" method="post">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <Label>Do You Want To Delete Data <?= $s['part']; ?>?</Label>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Delete</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>



                                    <?php $i++; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->



        <!-- Modal -->
        <div class="modal fade" id="newDataPartModal" tabindex="-1" role="dialog" aria-labelledby="newDataPartModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newDataPartModalLabel">Tambah Data Part</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('admin/tambahdatapart'); ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="formGroupExampleInput">Kode Part</label>
                                <input required type="text" class="form-control" id="kd_part" name="kd_part" placeholder="Contoh: ab002">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama Part</label>
                                <input required type="text" class="form-control" id="part" name="part" placeholder="Contoh: batu">
                            </div>
                           
                            <div class="form-group">
                                <label for="formGroupExampleInput">keterangan</label>
                                <input class="form-control" id="ket" name="ket" placeholder="Contoh: bahan mentah">
                            </div>
                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>