<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/home.css">
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

    </header>

    <div class="jumbotron">
        <p>
            Hai! <br> Mari belajar bersama <br> di Paud Cempaka
        </p>

    </div>

    <div class="container">

        <div class="nav1">
            <a href="<?php if ($user['role_id'] == 1) : ?>
                <?= base_url(); ?>materi
            <?php endif; ?>
            <?php if ($user['role_id'] == 2) : ?>
                <?= base_url(); ?>materimurid
            <?php endif; ?>">
                <img class="nav" src="<?= base_url(); ?>assets/img/materi.png" alt="">
                <p>Materi</p>
            </a>
        </div>
        <div class="nav1">
            <a href="<?php if ($user['role_id'] == 1) : ?>
                <?= base_url(); ?>tugas
            <?php endif; ?>
            <?php if ($user['role_id'] == 2) : ?>
                <?= base_url(); ?>tugasmurid
            <?php endif; ?>"><img class="nav" src="<?= base_url(); ?>assets/img/tugas.png" alt="">
                <p>Tugas</p>
            </a>
        </div>
        <div class="nav1">
            <a href=""><img class="nav" src="<?= base_url(); ?>assets/img/nilai.png" alt="">
                <p> Nilai</p>
            </a>
        </div>

    </div>