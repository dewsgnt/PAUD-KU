<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/edit_materi.css">
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
        <a href="<?= base_url(); ?>materi">Materi</a> >
        <a href="<?= base_url(); ?>materi/edit">Edit Materi</a>
    </div>

    <div class="form">
        <?php if (validation_errors()) : ?>
            <div style="background-color:#ffb8b8; text-align: center; ">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $materi['id']; ?>">
            <ul>
                <li>
                    <label for="tanggal">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" value="<?= $materi['tanggal']; ?>">
                </li>
                <li>
                    <label for="indikator">Indikator</label>
                    <textarea name="indikator" id="indikator" cols="35" rows="5" placeholder="<?= $materi['indikator']; ?>"></textarea>
                </li>
                <li>
                    <button type="submit" name="edit">SIMPAN PERUBAHAN</button>
                </li>
            </ul>
        </form>
    </div>