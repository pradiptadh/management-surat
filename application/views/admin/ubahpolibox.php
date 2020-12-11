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
    <h1 align="center">Ubah Data Surat Pinjaman</h1>
    <form method="post" action="<?php echo base_url() ?>admin/ubahDatapolibox" enctype="multipart/form-data">
        <table align="center" class="mahasiswa" style="width:800px;">
        <?php $i = 1; ?>
        <?php foreach ($polibox as $m) : ?>
            <tr>
                <td> No Peminjaman </td>
                <td><input name="id_polibox" type="text" placeholder=" Masukkan Jumlah" readonly value="<?= $m['id_polibox']; ?>"/></td>
            </tr>
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
            <?php endforeach; ?>
            <!-- <tr>
                <td> Perusahaan Pengirim </td>
                <td><input name="pengirim" type="text" value="<?= $m['pengirim']; ?>"/></td>
                <td><input name="id_polibox" type="hidden" value="<?= $m['id_polibox']; ?>"/></td>
                
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
                <td> Keterangan </td>
                <td>
                    <select class="form-control" name="ket" id="ket">
                        <option>-- Pilih Keterangan --</option>
                                                
                        <?php foreach ($polibox as $sm) :
                            if ($sm['id_polibox'] == $m['id_polibox']) { ?>
                            <option value="<?= $m['ket']; ?>" selected> <?= $m['ket']; ?> </option>
                        <?php } ?>

                        <?php endforeach; ?>

                        <?php if ($m['ket'] == "Belum DiKembalikan") { ?>
                        <option value="Sudah DiKembalikan"> Sudah DiKembalikan</option>
                        <?php } ?>
                        <?php if ($m['ket'] == "Sudah DiKembalikan") { ?>
                        <option value="Belum DiKembalikan"> Belum DiKembalikan </option>
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