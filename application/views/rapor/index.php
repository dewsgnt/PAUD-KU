<link rel="stylesheet" href="<?= base_url(); ?>assets/css/rapor.css">

</head>

<body>
    <header>
        <div>
            <p class="paud">PAUD CEMPAKA </p>

            <div class="logout">
                <a href="<?= base_url(); ?>auth/logout" onclick="return confirm('yakin ingin keluar?');">
                    <img class="logout" src="<?= base_url(); ?>assets/img/logout.png" alt="">
                </a>

            </div>
            <div class="photo"><?= $user['username']; ?></div>

        </div>

    </header>

    <div class="nav">
        <a href="<?= base_url(); ?>home">Depan</a> >
        <a href="<?php if ($user['role_id'] == 1) : ?>
                <?= base_url(); ?>nilai
            <?php endif; ?>
            <?php if ($user['role_id'] == 2) : ?>
                <?= base_url(); ?>nilaimurid
            <?php endif; ?>">Nilai</a> >
        <a href="<?= base_url(); ?>rapor">Lihat Rapor</a>
    </div>

    <div class="judul">
        <div class="text1">RAPOR <br>
            SEMESTER 1 TAHUN AJARAN 2020-2021
        </div>
    </div>

    <div class="boxaspek">
        <p class="aspek">
            KOMPETESI DASAR AKHLAK PERILAKU / SOSIAL EMOSIONAL
        </p>
        <div class="table">
            <table border="1" cellpadding='8' cellspacing='0'>
                <tr>
                    <th>No</th>
                    <th>Indikator</th>
                    <th>Penilaian</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Terbiasa mengucapkan salam</td>
                    <td>BSH</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Terbiasa menjawab salam</td>
                    <td>BSH</td>
                </tr>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Terbiasa membaca doa sebelum melakukan sesuatu</td>
                    <td>BSH</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Senang bersikap jujur</td>
                    <td>BSH</td>
                </tr>


            </table>
        </div>


    </div>
    <div class="boxaspek">
        <p class="aspek">
            KOMPETESI BAHASA
        </p>
        <div class="table">
            <table border="1" cellpadding='8' cellspacing='0'>
                <tr>
                    <th>No</th>
                    <th>Indikator</th>
                    <th>Penilaian</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Menjalankan dan menjawab</td>
                    <td>BSB</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Membuat kalimat Sederhana</td>
                    <td>BSB</td>
                </tr>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Mengenal posisi</td>
                    <td>BSH</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Menjawab cerita</td>
                    <td>MM</td>
                </tr>


            </table>
        </div>


    </div>

    <div class="ket">
        <p>
            Keterangan : <br>
            BM = Belum Muncul <br>
            MM = Mulai Muncul <br>
            BSH = Berkembang Sesuai Harapan <br>
            BSB = Berkembang Sangat Baik

        </p>

    </div>