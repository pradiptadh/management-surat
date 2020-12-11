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

                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newDataPerusahaanModel">Tambah Data Perusahaan</a>

                    <div class="col-lg" style="overflow-y: auto;">
                        <table class="table table-hover table-responsive-lg " width="100%">
                            <thead>
                                <tr>
                                    <th scope=" col">No</th>
                                    <th scope="col">Nama Perusahaan</th>
                                    <th scope="col">alamat</th>
                                    <th scope="col">Nomer Telpon</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($perusahaan as $s) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $s['nama_perusahaan']; ?></td>
                                        <td><?= $s['alamat']; ?></td>
                                        <td><?= $s['telp']; ?></td>
                                        <td><img src='<?= base_url() ?>berkas/<?= $s['logo']; ?>' width="100" height="100"></td>
                                        <td>
                                            <a href="" class="badge badge-success" data-toggle="modal" data-target="#editDataPerusahaan<?= $i; ?>">Ubah</a>
                                            <a href="" class="badge badge-danger" data-toggle="modal" data-target="#deleteDataPerusahaan<?= $i; ?>">Hapus</a>

                                        </td>

                                    </tr>
                                    <!-- Modal edit-->
                                    <div class="modal fade" id="editDataPerusahaan<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="editDataPerusahaanLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editDataPerusahaanLabel">Edit Data Perusahaann</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?= base_url('admin/editDataPerusahaan/' . $s['id_perusahaan']); ?>" method="post" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <input type="hidden" name="id_perusahaan" value="<?= $s['id_perusahaan']; ?>">
                                                            <label for="formGroupExampleInput">Nama Perusahaan</label>
                                                            <input required type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="<?= $s['nama_perusahaan']; ?>">
                                                        </div>      
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">Alamat</label>
                                                            <input required type="text" class="form-control" id="alamat" name="alamat" value="<?= $s['alamat']; ?>">
                                                        </div>                                        
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">Nomer Telpon</label>
                                                            <input class="form-control" id="telp" name="telp"value="<?= $s['telp']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="formGroupExampleInput">Pilih Logo Perusahaan</label>
                                                            <div class="custom-file">
                                                                
                                                                <input type="file" class="custom-file-input" id="logo" name="logo" required="">
                                                                <label class="custom-file-label" for="validatedCustomFile">Pilih Logo...</label>
                                                            </div>
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
                                    <div class="modal fade" id="deleteDataPerusahaan<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteDataPerusahaanLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteDataPerusahaanLabel">Delete Data Perusahaan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?= base_url('admin/deleteDataPerusahaan/' . $s['id_perusahaan']); ?>" method="post">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <Label>Do You Want To Delete Data <?= $s['nama_perusahaan']; ?>?</Label>
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
        <div class="modal fade" id="newDataPerusahaanModel" tabindex="-1" role="dialog" aria-labelledby="newDataPerusahaanModelLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newDataPerusahaanModelLabel">Tambah Data Perusahaan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('admin/tambahdataperusahaan'); ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama Perusahaan</label>
                                <input required type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Contoh: PT. SIGMA">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Alamat</label>
                                <input required type="text" class="form-control" id="alamat" name="alamat" placeholder="Contoh: gunung batu">
                            </div>
                           
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nomer Telpon</label>
                                <input class="form-control" id="telp" name="telp" placeholder="Contoh: 0251 123456">
                            </div>
                            <div class="form-group">
                            <label for="formGroupExampleInput">Pilih Logo Perusahaan</label>
                                <div class="custom-file">
                                    
                                    <input type="file" class="custom-file-input" id="logo" name="logo" required="">
                                    <label class="custom-file-label" for="validatedCustomFile">Pilih Logo...</label>
                                </div>
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