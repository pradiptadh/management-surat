        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


            <div class="row">
                <div class="col-lg-6">

                    <?= form_error('menu', '<div class="alert alert-danger" 
            role="alert">', '</div>'); ?>

                    <?= $this->session->flashdata('message'); ?>

                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Role</a>


                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($role as $r) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $r['role']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="badge badge-success">access</a>
                                    <a href="" class="badge badge-danger" data-toggle="modal" data-target="#DeleteMenuModal<?= $i; ?>">delete</a>

                                </td>
                            </tr>

                            <!-- Modal delete-->
                            <div class="modal fade" id="DeleteMenuModal<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="DeleteMenuModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="DeleteMenuModalLabel">Delete Role</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?= base_url('admin/deleteRole/' . $r['id']); ?>" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <Label>Do you Want To Delete This <?= $r['role']; ?>?</Label>
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

                            <!-- Modal edit-->
                            <div class="modal fade" id="editRoleModal" tabindex="-1" role="dialog" aria-labelledby="editRoleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editRoleModalLabel">Edit Role</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?= base_url('admin/editRole/' . $r['id']); ?> " method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="<?= $r['id']; ?>">
                                                    <input type="text" class="form-control" id="menu" name="menu" value="<?= $r['role']; ?>">
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" name="editRole" class="btn btn-primary">Edit</button>
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
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- modal -->

        <!-- Modal -->
        <div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('admin/role'); ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="role" name="role" placeholder="Role Name">
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