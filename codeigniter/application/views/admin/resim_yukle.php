<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Resim Yükleme</h6>
        </div>
        <div align="center" class="table-responsive">
            <form action="" method="post" enctype="multipart/form-data"><br>
                <label for="">Anasayfa resim yükleme <sup>*</sup></label>
                <input name="anasayfa" type="file">
                <input type="hidden" name="anasayfa_eski" value="<?=$images->resim_anasayfa?>">
                <button type="submit" value="1" name="anasayfa_fonk" class="btn btn-primary">Yükle</button>
                <br><br>
                <label for="">Hakkımda resim yükleme <sup>*</sup></label>
                <input name="hakkimda" type="file">
                <input type="hidden" name="hakkimda_eski" value="<?=$images->resim_hakkimda?>">
                <button type="submit" value="1" name="hakkimda_fonk" class="btn btn-primary">Yükle</button>
                <br><br>
                <label for="">Haber resim yükleme <sup>*</sup></label>
                <input name="haber" type="file">
                <input type="hidden" name="haber_eski" value="<?=$images->resim_haber?>">
                <button type="submit" value="1" name="haber_fonk" class="btn btn-primary">Yükle</button>
                <br><br>
                <label for="">Iletisim resim yükleme <sup>*</sup></label>
                <input name="iletisim" type="file">
                <input type="hidden" name="iletisim_eski" value="<?=$images->resim_iletisim?>">
                <button type="submit" value="1" name="iletisim_fonk"  class="btn btn-primary">Yükle</button>
            </form>
            <br>
        </div>
    </div>
</div>
