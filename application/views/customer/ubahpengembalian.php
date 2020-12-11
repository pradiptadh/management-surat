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
    <h1 align="center">Masukkan Data Pengembalian Polibox</h1>
    <form method="post" action="<?php echo base_url() ?>customer/ubahdatapengembalian" enctype="multipart/form-data">
        <table align="center" class="mahasiswa" style="width:800px;">
        <?php $i = 1; ?>
        <?php foreach ($surat_pengembalian as $m) : ?>
            <tr>
                <td> No Polibox </td>
                <td>
                    <select class="form-control" name="id_polibox" id="id_polibox">
                        <option>-- Pilih No Polibox --</option>
                        <?php foreach ($polibox as $k) : 
                        if($m['id_polibox']== $k['id_polibox']) { ?>                                                                    
                        <option value="<?= $k['id_polibox']; ?>" selected ><?= $k['id_polibox']; ?>
                        <?php }else{ ?>
                        <option value="<?= $k['id_polibox']; ?>"><?= $k['id_polibox']; ?>
                        <?php } ?>
                        <?php endforeach; ?>

                    </select>
                </td>
            </tr>
            
            <?php endforeach; ?>
            <tr>
                <td> Nama Perusahaan Pengirim</td>
                <td><input name="perusahaan" type="text" placeholder=" Masukkan Perusahaan Pengirim" value="<?= $m['perusahaan']; ?>"/></td>
                <td><input name="id_surat" type="hidden" placeholder=" Masukkan Perusahaan Penerima" value="<?= $m['id_surat']; ?>"/></td>
            </tr>

            <!-- <tr>
                <td> Nama Perusahaan Penerima</td>
                <td><input name="penerima" type="text" placeholder=" Masukkan Perusahaan Penerima" value="<?= $m['penerima']; ?>"/></td>
                
            </tr>
            -->
           
            <tr>
                <td> Jumlah Yang Dikembalikan</td>
                <td><input name="jml_kembali" type="text" placeholder=" Masukkan Jumlah" value="<?= $m['jml_kembali']; ?>"/></td>
            </tr>
            <tr>
                <td> Tanggal Dikembalikan</td>
                <td><input name="tgl_kembali" type="date"value="<?= $m['tgl_kembali']; ?>"/></td>
            </tr>
            <tr>
                <td> Keterangan </td>
                <td><input name="keterangan" type="text"placeholder=" Masukkan Keterangan"value="<?= $m['keterangan']; ?>"/></td>
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