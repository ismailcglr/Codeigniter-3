
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Haber Ayarları</h6>
        </div>
        <div align="center" class="table-responsive">
            <form action="" method="post"><br>
                <label for="">Site başlığı <sup>*</sup></label>
                <input value="<?= $rows->haber_baslik; ?>" name="baslik" id="baslik" type="text"><br>
                <label for="">Başlık açıklaması <sup>*</sup></label>
                <input value="<?= $rows->haber_aciklama; ?>" name="aciklama" id="aciklama" type="text"><br><br>
                <label for="">1.Haber Başlığı  <sup>*</sup></label>
                <input value="<?= $rows->haber_haber1; ?>" name="haber1" id="haber1" type="text"><br>
                <label for="">1.Haber Açıklaması <sup>*</sup></label><br>
                <textarea name="aciklama1" id="aciklama1" cols="30" rows="10"><?= $rows->haber_aciklama1; ?></textarea><br><br>
                <label for="">2.Haber Başlığı  <sup>*</sup></label>
                <input value="<?= $rows->haber_haber2; ?>" name="haber2" id="haber2" type="text"><br>
                <label for="">2.Haber Açıklaması <sup>*</sup></label><br>
                <textarea name="aciklama2" id="aciklama2" cols="30" rows="10"><?= $rows->haber_aciklama2; ?></textarea><br><br>
                <label for="">3.Haber Başlığı  <sup>*</sup></label>
                <input value="<?= $rows->haber_haber3; ?>" name="haber3" id="haber3" type="text"><br>
                <label for="">3.Haber Açıklaması <sup>*</sup></label><br>
                <textarea name="aciklama3" id="aciklama3" cols="30" rows="10"><?= $rows->haber_aciklama3; ?></textarea><br><br>
                <button type="submit" class="btn btn-primary">Güncelle</button>
            </form>
            <br>
        </div>
    </div>
</div>