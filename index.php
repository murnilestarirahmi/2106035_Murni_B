<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Pendaftaran Pemeriksaan</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="kotak">
        <h1 align="center">Puskeswan PureCare <br>Formulir Pendaftaran Pemeriksaan Hewan</h1><br><br>
        <hr>
        <h2>Identitas Pemilik</h2>
        <hr>
        <form action="./proses_input.php" method="post">

            <br>
            <label for="nmpemilik">Nama</label>
            <input type="text" name="nmpemilik" placeholder="Nama Pemilik" maxlength="30" class="form-input" required>

            <label for="tgllahir">Tanggal Lahir</label>
            <input type="date" name="tgllahir" class="form-input" required>

            <label for="nowa">WhatsApp</label>
            <input type="tel" name="nowa" placeholder="Nomor WhatsApp" maxlength="15" class="form-input" required>

            <br>
            <hr>
            <h2>Identitas Hewan</h2>
            <hr>
            <br>

            <label for="ktgrhewan">Kategori Hewan</label>
            <select name="ktgrhewan" class="form-input" required>
                <option value="" selected disabled>-Pilih Jenis Hewan-</option>
                <option value="Anjing">Anjing</option>
                <option value="Ayam">Ayam</option>
                <option value="Burung">Burung</option>
                <option value="Capybara">Capybara</option>
                <option value="Chinchilla">Chinchilla</option>
                <option value="Hamster">Hamster</option>
                <option value="Iguana">Iguana</option>
                <option value="Ikan">Ikan</option>
                <option value="Kelinci">Kelinci</option>
                <option value="Kucing">Kucing</option>
                <option value="Kura-kura">Kura-Kura</option>
                <option value="Marmut">Marmut</option>
                <option value="Musang">Musang</option>
                <option value="Otter">Otter</option>
                <option value="Sugar Glider">Sugar Glider</option>
                <option value="Tupai">Tupai</option>
                <option value="Ular">Ular</option>
                <option value="Lainnya">Lainnya</option>
            </select>

            <label for="nmhewan">Nama</label>
            <input type="text" name="nmhewan" placeholder="Nama Hewan" maxlength="30" class="form-input" required>

            <label for="usiahewan">Usia (bulan)</label>
            <input type="number" name="usiahewan" placeholder="Usia Hewan" min="0" class="form-input" required>

            <label for="jkhewan">Jenis Kelamin</label>
            <select name="jkhewan" class="form-input" required>
                <option value="" selected disabled>-Pilih Jenis Kelamin Hewan-</option>
                <option value="Jantan">Jantan</option>
                <option value="Betina">Betina</option>
            </select>

            <label for="wrnhewan">Warna</label>
            <input type="text" name="wrnhewan" placeholder="Warna Hewan" maxlength="20" class="form-input" required>

            <label for="rashewan">Ras</label>
            <input type="text" name="rashewan" placeholder="Ras Hewan" maxlength="20" class="form-input" required>

            <label for="layanan">Kategori Pemeriksaan</label>
            <select name="layanan" class="form-input" required>
                <option value="" selected disabled>-Pilih Layanan Pemeriksaan-</option>
                <option value="Kesehatan">Pemeriksaan Kesehatan</option>
                <option value="Pengobatan">Pengobatan</option>
                <option value="USG">Pemeriksaan Kebuntingan (USG)</option>
                <option value="Pasca Op">Kontrol Pasca Operasi</option>
            </select>

            <label for="keluhan">Keluhan</label>
            <textarea name="keluhan" placeholder="Jelaskan Keluhan dengan Singkat" class="form-input" rows="4" required></textarea>

            <button type="submit" id="btn-daftar">Daftar</button>
        </form>
    </div>
</body>

</html>