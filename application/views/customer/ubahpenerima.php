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
    <h1 align="center">Update Data Penerimaan</h1>
    <form method="post" action="<?php echo base_url() ?>customer/ubahdatapenerima" enctype="multipart/form-data">
        <table align="center" class="mahasiswa" style="width:800px;">
        <?php $i = 1; ?>
        <?php foreach ($surat_penerimaan as $m) : ?>
        
            <tr>
                <td> Nama Perusahaan Penerima</td>
                <td><input name="penerima" type="text" placeholder=" Nama Perusahaan Penerima" value="<?= $m['penerima']; ?>"/></td>
                <td><input name="id_customer" type="hidden" placeholder=" Nama Perusahaan Penerima" value="<?= $m['id_customer']; ?>"/></td>
            </tr>
            
            <?php endforeach; ?>
            <tr>
                <td> Nama Perusahaan Pengirim</td>
                <td><input name="pengirim" type="text" placeholder=" Nama Perusahaan Penerima" value="<?= $m['pengirim']; ?>"/></td>
            </tr>
           
            <tr>
                <td> Alamat Penerima</td>
                <td><input name="alamat" type="text" placeholder=" Masukkan Alamat"value="<?= $m['alamat']; ?>"/></td>
            </tr>
            <tr>
                <td> Alamat Pengirim</td>
                <td><input name="alamat_pengirim" type="text" placeholder=" Masukkan Alamat Pengirim"value="<?= $m['alamat_pengirim']; ?>"/></td>
            </tr>
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
            <tr>
                <td> Kode Barang </td>
                <td>
                    <select class="form-control" name="kd_part" id="kd_part">
                        <option>-- Pilih Kode Barang --</option>
                        <?php foreach ($surat_jalan as $k) : 
                        if($m['kd_part']== $k['kd_part']) { ?>                                                                    
                        <option value="<?= $k['kd_part']; ?>" selected ><?= $k['kd_part']; ?>
                        <?php }else{ ?>
                        <option value="<?= $k['kd_part']; ?>"><?= $k['kd_part']; ?>
                        <?php } ?>
                        <?php endforeach; ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td> Nama Barang </td>
                <td>
                    <select class="form-control" name="part" id="part">
                        <option>-- Pilih Barang --</option>
                        <?php foreach ($surat_jalan as $k) : 
                        if($m['part']== $k['part']) { ?>                                                                    
                        <option value="<?= $k['part']; ?>" selected ><?= $k['part']; ?>
                        <?php }else{ ?>
                        <option value="<?= $k['part']; ?>"><?= $k['part']; ?>
                        <?php } ?>
                        <?php endforeach; ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td> Jumlah</td>
                <td><input name="jml" type="text" placeholder=" Masukkan Jumlah"value="<?= $m['jml']; ?>"/></td>
            </tr>
            <tr>
                <td> Nomer SPB </td>
                <td><input name="nospb" type="text" placeholder=" Masukkan Nomer SPB"value="<?= $m['nospb']; ?>" /></td>
            </tr>
            <tr>
                <td> No PO </td>
                <td>
                    <select class="form-control" name="po" id="po">
                        <option>-- Pilih No PO --</option>
                        <?php foreach ($surat_jalan as $k) : 
                        if($m['po']== $k['po']) { ?>                                                                    
                        <option value="<?= $k['po']; ?>" selected ><?= $k['po']; ?>
                        <?php }else{ ?>
                        <option value="<?= $k['po']; ?>"><?= $k['po']; ?>
                        <?php } ?>
                        <?php endforeach; ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td> No WO </td>
                <td>
                    <select class="form-control" name="wo" id="wo">
                        <option>-- Pilih No Wo --</option>
                        <?php foreach ($surat_jalan as $k) : 
                        if($m['wo']== $k['wo']) { ?>                                                                    
                        <option value="<?= $k['wo']; ?>" selected ><?= $k['wo']; ?>
                        <?php }else{ ?>
                        <option value="<?= $k['wo']; ?>"><?= $k['wo']; ?>
                        <?php } ?>
                        <?php endforeach; ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td> Tanggal Diterima</td>
                <td><input name="tgl" type="date"value="<?= $m['tgl']; ?>"/></td>
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