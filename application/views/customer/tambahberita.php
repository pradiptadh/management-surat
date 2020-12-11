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
    <h1 align="center">Masukkan Data Berita Acara</h1>
    <form method="post" action="<?php echo base_url() ?>customer/simpanDataBerita" enctype="multipart/form-data">
        <table align="center" class="mahasiswa" style="width:800px;">
          
        <tr>
                <td> No BAST</td>
                <td><input name="id_berita" type="text"placeholder=" Masukkan No BAST"/></td>
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
                <td> Pengirim</td>
                <td>
                    <select class="form-control" name="perusahaan" id="perusahaan">
                        <option>-- Pilih Perusahaan --</option>
                        <?php foreach ($perusahaan as $p) { ?>
                            <option value="<?= $p['nama_perusahaan'] ?>"><?= $p['nama_perusahaan']; ?></option>
                        <?php } ?>

                    </select>
                </td>
            </tr>
            <!-- <tr>
                <td> Penerima</td>
                <td>
                    <select class="form-control" name="penerima" id="penerima">
                        <option>-- Pilih Perusahaan --</option>
                        <?php foreach ($perusahaan as $p) { ?>
                            <option value="<?= $p['nama_perusahaan'] ?>"><?= $p['nama_perusahaan']; ?></option>
                        <?php } ?>

                    </select>
                </td>
            </tr> -->
           
            <tr>
                <td> Jumlah Barang Yang Diterima</td>
                <td><input name="jml" type="text" placeholder=" Masukkan Jumlah"/></td>
            </tr>
            <tr>
                <td> Tanggal Berita Acara</td>
                <td><input name="tgl_berita" type="date"/></td>
            </tr>
            <tr>
                <td> Keterangan </td>
                <td><input name="keterangan" type="text" placeholder=" Masukkan keterangan"/></td>
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