
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Hakkımda Ayarları</h6>
        </div>
        <div align="center" class="table-responsive">
            <form action="" method="post"><br>
                <label for="">Site başlığı <sup>*</sup></label><br>
                <input value="<?= $rows->hakkimda_baslik; ?>" name="baslik" id="baslik" type="text"><br>
                <label for="">Başlık açıklaması <sup>*</sup></label><br>
                <input value="<?= $rows->hakkimda_aciklama; ?>" name="aciklama" id="aciklama" type="text"><br>
                <label for="">Hakkımda metni 1.paragraf giriniz <sup>*</sup></label><br>
                <textarea name="metin" id="metin" cols="30" rows="10"><?= $rows->hakkimda_metin; ?></textarea><br><br>
                <label for="">Hakkımda metni 2.paragraf giriniz <sup>*</sup></label><br>
                <textarea name="metin2" id="metin2" cols="30" rows="10"><?= $rows->hakkimda_metin2; ?></textarea><br><br>
                <label for="">Hakkımda metni 3.paragraf giriniz <sup>*</sup></label><br>
                <textarea name="metin3" id="metin3" cols="30" rows="10"><?= $rows->hakkimda_metin3; ?></textarea><br><br>
                <button type="submit" class="btn btn-primary">Güncelle</button>
            </form>
            <br>
        </div>
    </div>
</div>
