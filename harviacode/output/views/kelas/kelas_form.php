<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Kelas <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Kelas <?php echo form_error('kelas') ?></label>
            <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas" value="<?php echo $kelas; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Jml Murid <?php echo form_error('jml_murid') ?></label>
            <input type="text" class="form-control" name="jml_murid" id="jml_murid" placeholder="Jml Murid" value="<?php echo $jml_murid; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Created At <?php echo form_error('created_at') ?></label>
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" />
        </div>
	    <input type="hidden" name="id_kelas" value="<?php echo $id_kelas; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kelas') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>