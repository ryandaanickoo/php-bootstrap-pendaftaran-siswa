<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Telkom Malang</title>
    <link rel=stylesheet href="assets/bootstrap/css/bootstrap.min.css">
    <link rel=stylesheet href="assets/css/style.form.css">
</head>

<body>
    <header class="img">
        <img class="tengah" src="https://ppdb.smktelkom-mlg.sch.id/img/web/logo_login.png" class="tengah" alt="logo">
    </header>
    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
        <section id="input-form">
        <div id="background">
        <div class=form>
            <label for="nama">Nama: </label>
            <input class="form-control form-control-lg" name="nama" type="text" placeholder="NAMA">
</div>
        <div class="form">
            <label for="alamat">Alamat: </label>
            <input class="form-control form-control-lg" name="alamat" type="text" placeholder="ALAMAT">
</div>
        <div class="form">
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input class="form" type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input class="form" type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
</div>
        <div class="form">
            <label for="agama">Agama: </label>
            <select class="form-control form-control-lg" name="agama" placeholder="AGAMA">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
</div>
        <div class="form">
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input class="form-control form-control-lg" type="text" name="sekolah_asal" placeholder="NAMA SEKOLAH" />
</div>
        <div class="form">
            <input type="submit" value="Daftar" name="daftar" />
</div>

            </fieldset>
        </div>
    </form>
</section>
    </body>
</html>
