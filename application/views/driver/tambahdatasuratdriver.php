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
    <h1 align="center">Masukkan Data Surat Driver</h1>
    <form method="post" action="<?php echo base_url() ?>Driver/simpanDatakonfirmasi" enctype="multipart/form-data">
        <table align="center" class="mahasiswa" style="width:800px;">
            <tr>
                <td> Nama Driver </td>
                <td><input name="nama" type="text" placeholder=" Masukkan Nama" /></td>
            </tr>
           <tr>
                <td> Nomer Surat </td>
                <td>
                    <select class="form-control" name="id_surat" id="id_surat">
                        <option>-- Pilih Nomor --</option>
                        <?php foreach ($surat_jalan as $p) { ?>
                            <option value="<?= $p['id_surat'] ?>"><?= $p['nosurat']; ?></option>
                        <?php } ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td> Plat Nomer </td>
                <td><input name="plat" type="text" placeholder=" Masukkan Plat Nomer" /></td>
            </tr>
            <tr>
                <td> Tanggal Pengiriman</td>
                <td><input name="tgl" type="date"/></td>
            </tr>
                     
            <tr>
                <td> Keterangan </td>
                <td>
                    <select class="form-control" name="keterangan" id="keterangan">
                        <option>-- Pilih Keterangan --</option>
                        <option value="Dikirim">Dikirim</option>
                        <option value="Sampai Tujuan">Sampai Tujuan</option>

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