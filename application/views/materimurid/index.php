<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/materi.css">

</head>

<body>
    <header>
        <div>
            <p class="paud">PAUD CEMPAKA </p>
            <div class="logout">
                <a href="<?= base_url(); ?>auth/logout" onclick="return confirm('yakin ingin keluar?');"><img class="logout" src="<?= base_url(); ?>assets/img/logout.png" alt=""></a>
            </div>
            <div class="photo"><?= $user['username']; ?></div>
        </div>

    </header>
    <div class="nav">
        <a href="<?= base_url(); ?>home">Depan</a> >
        <a href="
            <?php if ($user['role_id'] == 1) : ?>
                <?= base_url(); ?>materi
            <?php endif; ?>
            <?php if ($user['role_id'] == 2) : ?>
                <?= base_url(); ?>materimurid
            <?php endif; ?>
        ">Materi</a>
    </div>

    <div class="judul">
        <div class="text1">MATERI</div>
    </div>

    <div class="table">
        <table border="1" cellpadding="12" cellspacing="0">

            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Indikator</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($materi as $mtr) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $mtr['tanggal']; ?></td>
                    <td><?= nl2br($mtr['indikator']); ?>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>