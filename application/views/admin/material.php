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

                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newDataMaterialModal">Tambah Data Material</a>

                    <div class="col-lg" style="overflow-y: auto;">
                        <table class="table table-hover table-responsive-lg " width="100%">
                            <thead>
                                <tr>
                                    <th scope=" col">No</th>
                                    <th scope="col">Kode Mt</th>
                                    <th scope="col">Nama Material</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($material as $s) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $s['kd_mt']; ?></td>
                                        <td><?= $s['material']; ?></td>
                                        <td><?= $s['ket']; ?></td>
                                        <td>
                                            <a href="" class="badge badge-success" data-toggle="modal" data-target="#editDataMaterial<?= $i; ?>">Ubah</a>
                                            <a href="" class="badge badge-danger" data-toggle="modal" data-target="#deleteDataMaterial<?= $i; ?>">Hapus</a>

                                        </td>

                                    </tr>
                                    <!-- Modal edit-->
                                    <div class="modal fade" id="editDataMaterial<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="editDataMaterialLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editDataMaterialLabel">Edit Data Material</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?= base_url('admin/editDataMaterial/' . $s['kd_mt']); ?>" method="post" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <input type="hidden" name="kd_mt" value="<?= $s['kd_mt']; ?>">
                                                            <label for="formGroupExampleInput">Kode Material</label>
                                                            <input required type="text" class="form-control" id="kd_mt" name="kd_mt" value="<?= $s['kd_mt']; ?>" readonly>
                                                        </div>      
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">Nama Material</label>
                                                            <input required type="text" class="form-control" id="material" name="material" value="<?= $s['material']; ?>">
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
                                    <div class="modal fade" id="deleteDataMaterial<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteDataMaterialLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteDataMaterialLabel">Delete Data Material</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?= base_url('admin/deleteDataMaterial/' . $s['kd_mt']); ?>" method="post">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <Label>Do You Want To Delete Data <?= $s['material']; ?>?</Label>
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
        <div class="modal fade" id="newDataMaterialModal" tabindex="-1" role="dialog" aria-labelledby="newDataMaterialModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newDataMaterialModalLabel">Tambah Data Material</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('admin/tambahdatamaterial'); ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="formGroupExampleInput">Kode Material</label>
                                <input required type="text" class="form-control" id="kd_mt" name="kd_mt" placeholder="Contoh: ab">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama Material</label>
                                <input required type="text" class="form-control" id="material" name="material" placeholder="Contoh: batu">
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