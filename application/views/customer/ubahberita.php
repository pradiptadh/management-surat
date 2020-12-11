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
    <h1 align="center">Update Data Berita Acara</h1>
    <form method="post" action="<?php echo base_url() ?>customer/ubahDataBerita" enctype="multipart/form-data">
        <table align="center" class="mahasiswa" style="width:800px;">
        <?php $i = 1; ?>
        <?php foreach ($berita as $m) : ?>
            <tr>
                <td> No Surat </td>
                <td>
                    <select class="form-control" name="nosurat" id="nosurat">
                        <option>-- Pilih No surat --</option>
                        <?php foreach ($surat_jalan as $k) : 
                        if($m['nosurat']== $k['nosurat']) { ?>                                                                    
                        <option value="<?= $k['nosurat']; ?>" selected ><?= $k['nosurat']; ?>
                        <?php }else{ ?>
                        <option value="<?= $k['nosurat']; ?>"><?= $k['nosurat']; ?>
                        <?php } ?>
                        <?php endforeach; ?>

                    </select>
                </td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td> Nama Pengirim</td>
                <td><input name="perusahaan" type="text" placeholder=" Masukkan perusahaan pengirim" value="<?= $m['perusahaan']; ?>"/></td>
                <td><input name="id_berita" type="hidden" placeholder=" Masukkan id_berita pengirim" value="<?= $m['id_berita']; ?>"/></td>
            </tr>
            <!-- <tr>
                <td> Nama penerima</td>
                <td><input name="penerima" type="text" placeholder=" Masukkan perusahaan penerima" value="<?= $m['penerima']; ?>"/></td>
            </tr>
            -->
            <tr>
                <td> Jumlah Barang Yang Diterima</td>
                <td><input name="jml" type="text" placeholder=" Masukkan Jumlah"value="<?= $m['jml']; ?>"/></td>
            </tr>
            <tr>
                <td> Tanggal Berita Acara</td>
                <td><input name="tgl_berita" type="date"value="<?= $m['tgl_berita']; ?>"/></td>
            </tr>
            <tr>
                <td> Keterangan </td>
                <td><input name="keterangan" type="text" placeholder=" Masukkan keterangan"value="<?= $m['keterangan']; ?>"/></td>
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