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
    <h1 align="center">Masukkan Data Surat Jalan</h1>
    <form method="post" action="<?php echo base_url() ?>admin/simpanDataSurat" enctype="multipart/form-data">
        <table align="center" class="mahasiswa" style="width:800px;">
            <tr>
                <td> Nomor Surat </td>
                <td><input name="nosurat" type="text" placeholder="Masukkan Nomor Surat" /></td>
            </tr>
            <tr>
                <td> Penerima </td>
                <td>
                    <select class="form-control" name="id_perusahaan" id="id_perusahaan">
                        <option>-- Pilih Perusahaan --</option>
                        <?php foreach ($perusahaan as $p) { ?>
                            <option value="<?= $p['id_perusahaan'] ?>"><?= $p['nama_perusahaan']; ?></option>
                        <?php } ?>

                    </select>
                </td>
            </tr>
            <!-- <tr>
                <td> Pengirim</td>
                <td>
                    <select class="form-control" name="pengirim" id="pengirim">
                        <option>-- Pilih Perusahaan --</option>
                        <?php foreach ($perusahaan as $p) { ?>
                            <option value="<?= $p['nama_perusahaan'] ?>"><?= $p['nama_perusahaan']; ?></option>
                        <?php } ?>

                    </select>
                </td>
            </tr> -->
            <!-- <tr>
                <td> Kode Barang </td>
                <td>
                    <select class="form-control" name="kd_part" id="kd_part">
                        <option>-- Pilih Kode Barang --</option>
                        <?php foreach ($part as $k) { ?>
                            <option value="<?= $k['kd_part'] ?>"><?= $k['kd_part']; ?></option>
                        <?php } ?>

                    </select>
                </td>
            </tr> -->
            <tr>
                <td> Nama Barang</td>
                <td>
                    <select class="form-control" name="part" id="part">
                        <option>-- Pilih Barang --</option>
                        <?php foreach ($part as $k) { ?>
                            <option value="<?= $k['part'] ?>"><?= $k['part']; ?></option>
                        <?php } ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td> Jumlah </td>
                <td><input name="jml" type="text" placeholder=" Masukkan Jumlah" /></td>
            </tr>
            <tr>
                <td> No PO</td>
                <td><input name="po" type="text" placeholder="Masukkan No PO" /></td>
            </tr>  
            <tr>
                <td> No WO</td>
                <td><input name="wo" type="text" placeholder="Masukkan No WO" /></td>
            </tr>   
            <!-- <tr>
                <td> Alamat Dikirim</td>
                <td><input name="alamat" type="text" placeholder="Masukkan Alamat Yang Dituju" /></td>
            </tr>  -->
            <!-- <tr>
                <td> Alamat Pengiriman</td>
                <td><input name="alamat_pengirim" type="text" placeholder="Masukkan Alamat Pengirim" /></td>
            </tr>  -->
            <tr>
                <td> Tanggal Surat</td>
                <td><input name="tgl" type="date" placeholder="Masukkan Tanggal Surat" /></td>
            </tr>
                     
            <tr>
                <td> Status </td>
                <td>
                    <select class="form-control" name="status" id="status">
                        <option>-- Pilih Status --</option>
                        <option value="Belum Diterima">Belum Diterima</option>
                        <option value="Sudah Diterima">Sudah Diterima</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td> Keterangan </td>
                <td><input name="keterangan" type="text" placeholder="Masukkan Keterangan" /></td>
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