
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profile Ayar</h6>
        </div>
        <div align="center" class="table-responsive">
            <form action="" method="post"><br>
                <label for="">Ad & Soyadınız <sup>*</sup></label><br>
                <input value="<?= $rows->kadi; ?>" name="kadi" type="text"><br><br>
                <label for="">E-Posta adresiniz <sup>*</sup></label><br>
                <input value="<?= $rows->eposta; ?>" name="eposta" type="email"><br><br>
                <label for="">Şifre <sup>*</sup></label><br>
                <input value="" name="sifre" type="text"><br>
                <span style="color: red;">Şifreyi değiştirmek zorunda değilsiniz..!</span><br><br>
                <button type="submit" class="btn btn-success">Güncelle</button>
            </form>
            <br>
        </div>
    </div>
</div>
