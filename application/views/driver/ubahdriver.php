<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=date],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit],
    button {
        width: 100px;
        background-color: #fe019f;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover,
    button:hover {
        background-color: #fa056d;
    }

    textarea {
        width: 500px;
    }


    .mahasiswa {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    .mahasiswa td,
    .mahasiswa th {
        padding: 8px;
    }
</style>

<body>
    <h1 align="center">Ubah Data Surat Driver</h1>
    <form method="post" action="<?php echo base_url() ?>driver/ubahsurat" enctype="multipart/form-data">
        <table align="center" class="mahasiswa" style="width:800px;">
        <?php $i = 1; ?>
        <?php foreach ($surat_jalan as $m) : ?>
            <tr>
                <td> Nama Driver </td>
                <td><input name="nama_driver" type="text" placeholder=" Masukkan Nama" value="<?= $m['nama_driver']; ?>"/></td>
                <td><input name="id_surat" type="hidden"value="<?= $m['id_surat']; ?>"/></td>
            </tr>

            <?php endforeach; ?>
            <tr>
                <td> Nomer Surat </td>
                <td>
                    <select class="form-control" name="id_surat" id="id_surat">
                        <option>-- Pilih Nomor --</option>
                        <?php foreach ($surat_jalan as $k) : 
                        if($m['id_surat']== $k['id_surat']) { ?>                                                                    
                        <option value="<?= $k['id_surat']; ?>" selected ><?= $k['nosurat']; ?>
                        <?php }else{ ?>
                        <option value="<?= $k['id_surat']; ?>"><?= $k['nosurat']; ?>
                        <?php } ?>
                        <?php endforeach; ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td> Plat Nomer </td>
                <td><input name="plat" type="text" placeholder=" Masukkan Plat Nomer" value="<?= $m['plat']; ?>"/></td>
            </tr>
            <tr>
                <td> Tanggal Pengiriman</td>
                <td><input name="tgl_jalan" type="date"value="<?= $m['tgl_jalan']; ?>"/></td>
            </tr>
            <tr>
                <td> Status </td>
                <td>
                    <select class="form-control" name="status" id="status">
                        <option>-- Pilih Status --</option>
                                                
                        <?php foreach ($surat_jalan as $sm) :
                            if ($sm['id_surat'] == $m['id_surat']) { ?>
                            <option value="<?= $m['status']; ?>" selected> <?= $m['status']; ?> </option>
                        <?php } ?>

                        <?php endforeach; ?>

                        <?php if ($m['status'] == "Belum Diterima") { ?>
                        <option value="Sudah Diterima"> Sudah Diterima</option>
                        <?php } ?>
                        <?php if ($m['status'] == "Sudah Diterima") { ?>
                        <option value="Belum Diterima"> Belum Diterima </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><input type="submit" value="SIMPAN">
            </tr>
        </table>
    </form>
</body>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>