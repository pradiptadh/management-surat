        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


            <div class="row">
                <div class="col-lg-6">

                    <?= form_error('menu', '<div class="alert alert-danger" 
            role="alert">', '</div>'); ?>

                    <?= $this->session->flashdata('message'); ?>

                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add New Menu</a>


                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Menu</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($menu as $m) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $m['menu']; ?></td>
                                <td>
                                    <a href="" class="badge badge-success" data-toggle="modal" data-target="#editMenuModal<?= $i; ?>">edit</a>
                                    <a href="" class="badge badge-danger" data-toggle="modal" data-target="#DeleteMenuModal<?= $i; ?>">delete</a>

                                </td>
                            </tr>

                            <!-- Modal edit-->
                            <div class="modal fade" id="editMenuModal<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="editMenuModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editMenuModalLabel">Edit Menu</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?= base_url('menu/editMenu/' . $m['id']); ?> " method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="<?= $m['id']; ?>">
                                                    <input type="text" class="form-control" id="menu" value="<?= $m['menu'] ?>" name="menu" placeholder=" New Menu Name">
                                                </div>

                                            </div>
                                            <div class=" modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" name="editMenu" class="btn btn-primary">Edit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal delete-->
                            <div class="modal fade" id="DeleteMenuModal<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="DeleteMenuModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="DeleteMenuModalLabel">Delete Menu</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?= base_url('menu/deleteMenu/' . $m['id']); ?>" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <Label>Do you Want To Delete This menu <?= $m['menu'] ?>?</Label>
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
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->




        <!-- Modal Add-->
        <div class=" modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('menu/'); ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu Name">
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