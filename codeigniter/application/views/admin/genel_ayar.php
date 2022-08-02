
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Genel Ayarlar</h6>
        </div>
        <div align="center" class="table-responsive">
            <form action="" method="post"><br>
                <label for="">Anasayfa başlık giriniz <sup>*</sup></label>
                <input value="<?= $rows->genel_anasayfa_baslik; ?>" name="baslik" id="baslik" type="text"><br><br>
                <label for="">Anasayfa başlık açıklaması giriniz <sup>*</sup></label>
                <input value="<?= $rows->genel_anasayfa_aciklama; ?>" name="aciklama" id="aciklama" type="text"><br><br>
                <label for="">Site adınızı giriniz <sup>*</sup></label>
                <input value="<?= $rows->genel_site; ?>" name="site" id="site" type="text"><br><br>
                <label for="">Instagram adres linkiniz <sup>*</sup></label>
                <input value="<?= $rows->genel_ins; ?>" name="ins" id="ins" type="text"><br><br>
                <label for="">Facebook adres linkiniz <sup>*</sup></label>
                <input value="<?= $rows->genel_fac; ?>" name="fac" id="fac" type="text"><br><br>
                <label for="">Google adres linkiniz <sup>*</sup></label>
                <input value="<?= $rows->genel_gog; ?>" name="gog" id="gog" type="text"><br><br>
                <label for="">Github adres linkiniz <sup>*</sup></label>
                <input value="<?= $rows->genel_git; ?>" name="git" id="git" type="text"><br><br>
                <button type="submit" class="btn btn-primary">Güncelle</button>
            </form>
            <br>
        </div>
    </div>
</div>
