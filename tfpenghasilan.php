<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer</title>
    <link rel="stylesheet" href="tfpenghasilan.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>
</head>

<body>
    <div class="navbar-tf">
        <div class="kiri">
            <a href="http://localhost/pjbl_pas/landingpage/landingpage.php"><img src="logo_zaka-removebg-preview.png"></a>
        </div>
        <div class="tengah">
            <ul>
                <li><a href="http://localhost/pjbl_pas/landingpage/landingpage.php">Home</a></li>
                <li>
                    <a href="http://localhost/pjbl_pas/zakat/zakat.php">Zakat ▾</a>
                    <ul class="dropdown">
                        <li><a href="http://localhost/pjbl_pas/materi/emas%20dan%20perak/materiemas.php">Emas dan Perak</a></li>
                        <li><a href="http://localhost/pjbl_pas/materi/penghasilan/materipenghasilan.php">Penghasilan</a></li>
                        <li><a href="http://localhost/pjbl_pas/materi/perniagaan/materiperniagaan.php">Perniagaan</a></li>
                        <li><a href="http://localhost/pjbl_pas/materi/pertanian/materipertanian.php">Pertanian</a></li>
                        <li><a href="http://localhost/pjbl_pas/materi/rikaz/materirikaz.php">Rikaz</a></li>
                    </ul>
                </li>
                <li><a href="http://localhost/pjbl_pas/kalkulator/kalku-pengasilan.php">Kalkulator</a></li>
                <li><a href="http://localhost/pjbl_pas/transfer/tfpenghasilan.php">Transfer</a></li>
            </ul>
        </div>
        <div class="kanan">
            <a href="http://localhost/pjbl_pas/profil/profil.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M40 45C43.5362 45 46.9276 43.5952 49.428 41.0947C51.9285 38.5943 53.3333 35.2029 53.3333 31.6666C53.3333 28.1304 51.9285 24.739 49.428 22.2386C46.9276 19.7381 43.5362 18.3333 40 18.3333C36.4637 18.3333 33.0724 19.7381 30.5719 22.2386C28.0714 24.739 26.6666 28.1304 26.6666 31.6666C26.6666 35.2029 28.0714 38.5943 30.5719 41.0947C33.0724 43.5952 36.4637 45 40 45ZM40 41.6666C41.3132 41.6666 42.6135 41.408 43.8268 40.9054C45.04 40.4029 46.1424 39.6663 47.071 38.7377C47.9996 37.8091 48.7362 36.7067 49.2388 35.4935C49.7413 34.2802 50 32.9799 50 31.6666C50 30.3534 49.7413 29.0531 49.2388 27.8398C48.7362 26.6266 47.9996 25.5242 47.071 24.5956C46.1424 23.667 45.04 22.9304 43.8268 22.4279C42.6135 21.9253 41.3132 21.6666 40 21.6666C37.3478 21.6666 34.8043 22.7202 32.9289 24.5956C31.0535 26.4709 30 29.0145 30 31.6666C30 34.3188 31.0535 36.8624 32.9289 38.7377C34.8043 40.6131 37.3478 41.6666 40 41.6666Z"
                        fill="#004225" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M73.3333 40C73.3333 58.41 58.41 73.3333 40 73.3333C21.59 73.3333 6.66663 58.41 6.66663 40C6.66663 21.59 21.59 6.66666 40 6.66666C58.41 6.66666 73.3333 21.59 73.3333 40ZM56.05 65.35C51.2516 68.396 45.6835 70.0091 40 70C34.1802 70.0093 28.4845 68.3178 23.6133 65.1333C23.2133 64.6333 22.8083 64.1167 22.3966 63.5833C21.9208 62.9583 21.6643 62.1939 21.6666 61.4083C21.6666 59.6133 22.9566 58.1083 24.6816 57.8567C36.09 56.19 43.945 56.3333 55.3683 57.915C56.1956 58.0349 56.9515 58.4501 57.4965 59.084C58.0415 59.7178 58.3387 60.5274 58.3333 61.3633C58.3333 62.1633 58.0583 62.94 57.5616 63.5467C57.05 64.17 56.545 64.7717 56.05 65.35ZM61.6416 60.7767C61.375 57.6567 59.0066 55.0533 55.825 54.6133C44.1316 52.995 35.9583 52.84 24.2 54.5583C21 55.025 18.6416 57.6517 18.3616 60.78C12.9872 55.1984 9.98937 47.7484 9.99996 40C9.99996 23.4317 23.4316 9.99999 40 9.99999C56.5683 9.99999 70 23.4317 70 40C70.0106 47.7468 67.0141 55.1954 61.6416 60.7767Z"
                        fill="#004225" />
                </svg>
            </a>
        </div>
    </div>
    <div class="peringatan">
        <h3 class="blink">WARNING! INI HANYA SIMULASI BUKAN ASLI</h3>
    </div>
    <div class="proses-tf">
        <div id="tf-kiri">
            <div id="pilih-input">
                <select name="var1" size="1">
                    <option value="PENGHA">Zakat Penghasilan
                    <option value="PERNI">Zakat Perniagaan
                </select>
                <br>
                <br>
                <br>
                <div class="isisi">
                    <table>
                        <tr>
                            <td>Nominal Zakat</td>
                            <td> : </td>
                            <td> Rp <input name="var3" value="81000000"></td>
                        </tr>
                        <tr>
                            <td>Nomor Telepon</td>
                            <td> : </td>
                            <td> Rp <input type="number" name="var4"></td>
                        </tr>
                        <tr>
                            <td><b>Email</b></td>
                            <td> : </td>
                            <td> Rp <input type="email" name="var5"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <br><br><br>
            <div id="dalil">
                <h2>نَوَيْتُ أَنْ أُخْرِجَ زَكاَةَ اْلمَالِ عَنْ نَفْسِيْ فَرْضًا لِلهِ تَعَالَى</h2><br>
                <p>Nawaitu an ukhrija zakatal maali'an nafsi fardan lillahi ta’ala.</p>
            </div>
        </div>
        <div id="tf-kanan">
            <h3>Pilih Metode Pembayaran</h3>
            <br> 
            <div class="opsi">
                <div id="radio1">
                    <input type="radio" name="var1" value="radio1">
                    <p><b>Gofay</b></p>
                </div>
                <div id="radio2">
                    <input type="radio" name="var2" value="radio2">
                    <p><b>Ovi</b></p>
                </div>
                <div id="radio3">
                    <input type="radio" name="var3" value="radio3">
                    <p><b>Bank IRB</b></p>
                </div>
                <div id="radio4">
                    <input type="radio" name="var4" value="radio4">
                    <p><b><i>Bank ABC</i></b></p>
                </div>
                <div id="tombol">
                    <input type="button" name="var8" value="Bayar">
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <img src="logo_zaka-removebg-preview.png">
        <p>@ 2023 ZaKaa</p>
        <a>About Us</a>
    </div>
</body>

</html>