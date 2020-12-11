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
    <form method="post" action="<?php echo base_url() ?>admin/ubahsurat" enctype="multipart/form-data">
        <table align="center" class="mahasiswa" style="width:800px;">
        <?php $i = 1; ?>
        <?php foreach ($surat_jalan as $m) : ?>
            <tr>
            <td><input name="id_surat" type="hidden" placeholder="Masukkan Nomor Induk"  value="<?= $m['id_surat'];?> "/></td>
             </tr>
     
            <tr>
                <td> Nomor Surat </td>
                <td><input name="nosurat" type="text" placeholder="Masukkan Nomor Surat" readonly value="<?= $m['nosurat']; ?>"/></td>
            </tr>
           
                        <?php endforeach; ?>
            <tr>
                <td> Perusahaan Dikirim </td>
                <td>
                    <select class="form-control" name="id_perusahaan" id="id_perusahaan">
                        <option>-- Pilih Perusahaan --</option>
                        <?php foreach ($perusahaan as $k) : 
                        if($m['nama_perusahaan']== $k['nama_perusahaan']) { ?>                                                                    
                        <option value="<?= $k['id_perusahaan']; ?>" selected ><?= $k['nama_perusahaan']; ?>
                        <?php }else{ ?>
                        <option value="<?= $k['id_perusahaan']; ?>"><?= $k['nama_perusahaan']; ?>
                        <?php } ?>
                        <?php endforeach; ?>

                    </select>
                </td>
            </tr>
            <!-- <tr>
                <td> Perusahaan Pengirim </td>
                <td><input name="pengirim" type="text" value="<?= $m['pengirim']; ?>"/></td>
            </tr> -->
            <!-- <tr>
                <td> Kode Barang </td>
                <td>
                    <select class="form-control" name="kd_part" id="kd_part">
                        <option>-- Pilih Kode Barang --</option>
                        <?php foreach ($part as $k) : 
                        if($m['kd_part']== $k['kd_part']) { ?>                                                                    
                        <option value="<?= $k['kd_part']; ?>" selected ><?= $k['kd_part']; ?>
                        <?php }else{ ?>
                        <option value="<?= $k['kd_part']; ?>"><?= $k['kd_part']; ?>
                        <?php } ?>
                        <?php endforeach; ?>

                    </select>
                </td>
            </tr> -->
            <tr>
                <td> Nama Barang </td>
                <td>
                    <select class="form-control" name="part" id="part">
                        <option>-- Pilih Barang --</option>
                        <?php foreach ($part as $k) : 
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
                <td> Jumlah </td>
                <td><input name="jml" type="text" placeholder=" Masukkan Jumlah" value="<?= $m['jml']; ?>"/></td>
            </tr>
            <tr>
                <td> No PO</td>
                <td><input name="po" type="text" placeholder="Masukkan No PO" value="<?= $m['po']; ?>"/></td>
            </tr>  
            <tr>
                <td> No WO</td>
                <td><input name="wo" type="text" placeholder="Masukkan No WO"value="<?= $m['wo']; ?>" /></td>
            </tr>   
            <!-- <tr>
                <td> Alamat Dikirim</td>
                <td><input name="alamat" type="text" placeholder="Masukkan Alamat Yang Dituju" value="<?= $m['alamat']; ?>" /></td>
            </tr>  -->
            <!-- <tr>
                <td> Alamat Pengiriman</td>
                <td><input name="alamat_pengirim" type="text" placeholder="Masukkan Alamat Pengirim" value="<?= $m['alamat_pengirim']; ?>" /></td>
            </tr>  -->
            <tr>
                <td> Tanggal Surat</td>
                <td><input name="tgl" type="date" placeholder="Masukkan Tanggal Surat"  value="<?= $m['tgl']; ?>"/></td>
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
                <td> Keterangan </td>
                <td><input name="keterangan" type="text" placeholder="Masukkan keterangan" value="<?= $m['keterangan']; ?>" /></td>
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