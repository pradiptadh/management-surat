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

                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Add New Submenu</a>


                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Menu</th>
                                <th scope="col">Url</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Active</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($subMenu as $sm) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $sm['title']; ?></td>
                                <td><?= $sm['menu']; ?></td>
                                <td><?= $sm['url']; ?></td>
                                <td><?= $sm['icon']; ?></td>
                                <td><?= $sm['is_active']; ?></td>

                                <td>
                                    <a href="" class="badge badge-success" data-toggle="modal" data-target="#editSubMenuModal<?= $i; ?>">edit</a>
                                    <a href="" class="badge badge-danger" data-toggle="modal" data-target="#DeleteMenuModal<?= $i; ?>">delete</a>

                                </td>
                            </tr>


                            <!-- Modal edit-->
                            <div class="modal fade" id="editSubMenuModal<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="editSubMenuModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editSubMenuModalLabel">Edit SubMenu</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?= base_url('menu/editSubMenu/' . $sm['id']); ?>" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="<?= $sm['id']; ?>">
                                                    <input type="text" class="form-control" id="title" name="title" value="<?= $sm['title']; ?>" placeholder=" Edit Submenu title">
                                                </div>

                                                <div class="form-group">
                                                    <select name="menu_id" id="menu_id" class="form-control">
                                                        <option value="">Select Menu</option>
                                                        <?php foreach ($menu as $m) :
                                                                if ($sm['menu'] == $m['menu']) { ?>
                                                        <option value="<?= $m['id']; ?>" selected> <?= $m['menu']; ?> </option>
                                                        <?php } else { ?>
                                                        <option value="<?= $m['id']; ?>"> <?= $m['menu']; ?> </option>
                                                        <?php } ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="url" name="url" value="<?= $sm['url']; ?>" placeholder="Edit Submenu Url">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $sm['icon']; ?>" placeholder=" Edit Submenu Icon">
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="<?= $sm['is_active']; ?>" name="is_active" id="is_active" checked>
                                                        <label class="form=check-label" for="is_active">
                                                            Active?
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" name="editSubMenu" class="btn btn-primary">Edit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal hapus-->
                            <div class="modal fade" id="DeleteMenuModal<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="DeleteMenuModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="DeleteMenuModalLabel">Delete SubMenu</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?= base_url('menu/deleteSubMenu/' . $sm['id']); ?>" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <Label>Do you Want To Delete This Submenu <?= $sm['title']; ?>?</Label>
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

        <!-- modal -->

        <!-- Modal tambah-->
        <div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newSubMenuModalLabel">Add New SubMenu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('menu/submenu'); ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
                            </div>

                            <div class="form-group">
                                <select name="menu_id" id="menu_id" class="form-control">
                                    <option value="">Select Menu</option>
                                    <?php foreach ($menu as $m) : ?>
                                    <option value="<?= $m['id']; ?>"> <?= $m['menu']; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                    <label class="form=check-label" for="is_active">
                                        Active?
                                    </label>
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