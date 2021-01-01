<link rel="stylesheet" href="<?= base_url(); ?>assets/css/nilai.css">

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
            <?php endif; ?>">Nilai</a>
    </div>

    <div class="judul">
        <div class="text1">NILAI</div>
    </div>

    <div class="container">
        <div class="boxtugas">
            <div>
                <table cellpadding='8' cellspacing='0'>
                    <tr>
                        <th>Rapor</th>
                    </tr>
                    <tr>
                        <td>Semester 1 <br>Tahun Ajaran 2020-2021</td>
                    </tr>
                </table>
            </div>

            <div class="pilihan">
                <a href="<?= base_url(); ?>rapor">
                    <button class="edit">Lihat Rapor</button>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="boxtugas">
            <div>
                <table cellpadding='8' cellspacing='0'>
                    <tr>
                        <th>Rapor</th>
                    </tr>
                    <tr>
                        <td>Semester 2 <br>Tahun Ajaran 2020-2021</td>
                    </tr>
                </table>
            </div>

            <div class="pilihan">
                <a href="<?= base_url(); ?>rapor">
                    <button class="edit">Lihat Rapor</button>
                </a>

            </div>
        </div>
    </div>