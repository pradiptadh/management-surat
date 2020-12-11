<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Kelas List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Kelas</th>
		<th>Jml Murid</th>
		<th>Created At</th>
		
            </tr><?php
            foreach ($kelas_data as $kelas)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $kelas->kelas ?></td>
		      <td><?php echo $kelas->jml_murid ?></td>
		      <td><?php echo $kelas->created_at ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>