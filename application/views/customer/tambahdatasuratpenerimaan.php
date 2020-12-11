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
    <h1 align="center">Masukkan Data Penerimaan</h1>
    <form method="post" action="<?php echo base_url() ?>customer/simpanDataPenerimaan" enctype="multipart/form-data">
        <table align="center" class="mahasiswa" style="width:800px;">
           
         <tr>
                <td> Nama Perusahaan Penerima </td>
                <td>
                    <select class="form-control" name="penerima" id="penerima">
                        <option>-- Pilih Perusahaan --</option>
                        <?php foreach ($perusahaan as $s) { ?>
                            <option value="<?= $s['nama_perusahaan'] ?>"><?= $s['nama_perusahaan']; ?></option>
                        <?php } ?>

                    </select>
                </td>
            </tr>
           
           <tr>
                <td> Nama Perusahaan Pengirim </td>
                <td>
                    <select class="form-control" name="pengirim" id="pengirim">
                        <option>-- Pilih Perusahaan --</option>
                        <?php foreach ($perusahaan as $s) { ?>
                            <option value="<?= $s['nama_perusahaan'] ?>"><?= $s['nama_perusahaan']; ?></option>
                        <?php } ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td> Alamat Penerima</td>
                <td><input name="alamat" type="text" placeholder=" Masukkan Alamat"/></td>
            </tr>
            <tr>
                <td> Alamat Pengirim</td>
                <td><input name="alamat_pengirim" type="text" placeholder=" Masukkan Alamat Pengirim"/></td>
            </tr>
            <tr>
                <td> No Surat </td>
                <td>
                    <select class="form-control" name="nosurat" id="nosurat">
                        <option>-- Pilih No Surat --</option>
                        <?php foreach ($surat_jalan as $p) { ?>
                            <option value="<?= $p['nosurat'] ?>"><?= $p['nosurat']; ?></option>
                        <?php } ?>

                    </select>
                </td>
            </tr>
           <tr>
                <td> Kode Barang </td>
                <td>
                    <select class="form-control" name="kd_part" id="kd_part">
                        <option>-- Pilih Kode Barang --</option>
                        <?php foreach ($part as $p) { ?>
                            <option value="<?= $p['kd_part'] ?>"><?= $p['kd_part']; ?></option>
                        <?php } ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td> Nama Barang </td>
                <td>
                    <select class="form-control" name="part" id="part">
                        <option>-- Pilih Nama Barang --</option>
                        <?php foreach ($part as $p) { ?>
                            <option value="<?= $p['part'] ?>"><?= $p['part']; ?></option>
                        <?php } ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td> Jumlah</td>
                <td><input name="jml" type="text" placeholder=" Masukkan Jumlah"/></td>
            </tr>
            <tr>
                <td> Nomer SPB </td>
                <td><input name="nospb" type="text" placeholder=" Masukkan Nomer SPB" /></td>
            </tr>
            <tr>
                <td> No PO </td>
                <td>
                    <select class="form-control" name="po" id="po">
                        <option>-- Pilih No Po --</option>
                        <?php foreach ($surat_jalan as $p) { ?>
                            <option value="<?= $p['po'] ?>"><?= $p['po']; ?></option>
                        <?php } ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td> No wo </td>
                <td>
                    <select class="form-control" name="wo" id="wo">
                        <option>-- Pilih No Wo --</option>
                        <?php foreach ($surat_jalan as $p) { ?>
                            <option value="<?= $p['wo'] ?>"><?= $p['wo']; ?></option>
                        <?php } ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td> Tanggal Diterima</td>
                <td><input name="tgl" type="date"/></td>
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