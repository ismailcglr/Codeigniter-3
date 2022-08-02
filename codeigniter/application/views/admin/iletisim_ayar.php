
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Iletişim Ayarları</h6>
        </div>
        <div align="center" class="table-responsive">
            <form action="" method="post"><br>
                <label for="">Site başlığı <sup>*</sup></label><br>
                <input value="<?= $rows->iletisim_baslik; ?>" name="baslik" id="baslik" type="text"><br>
                <label for="">Başlık açıklaması <sup>*</sup></label><br>
                <input value="<?= $rows->iletisim_aciklama; ?>" type="text" name="aciklama" id="aciklama"><br>
                <label for="">Iletisim metniniz <sup>*</sup></label><br>
                <input value="<?= $rows->iletisim_metin; ?>" type="text" name="metin" id="metin"><br> <br>
                <button type="submit" class="btn btn-primary">Güncelle</button>
            </form>
            <br>
        </div>
    </div>
</div>
