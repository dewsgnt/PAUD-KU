<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/edit_tugas.css">
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
        <a href="<?= base_url(); ?>tugas">Tugas</a> >
        <a href="<?= base_url(); ?>tugas/edit">Edit Tugas</a>
    </div>

    <div class="form">
        <?php if (validation_errors()) : ?>
            <div style="background-color:#ffb8b8; text-align: center; ">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $tugas['id']; ?>">
            <ul>
                <li>
                    <label for="tanggal">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" value="<?= $tugas['tanggal']; ?>">
                </li>
                <li>
                    <label for="judul">Judul Tugas</label>
                    <input type="text" id="judul" name="judul" value="<?= $tugas['judul']; ?>">
                </li>
                <li>
                    <label for="deskripsi">Deskripsi Tugas</label>
                    <textarea name="deskripsi" id="deskripsi" cols="35" rows="5" placeholder="<?= $tugas['deskripsi']; ?>"></textarea>
                </li>
                <li>
                    <button type="submit" name="edit">SIMPAN PERUBAHAN</button>
                </li>
            </ul>
        </form>
    </div>