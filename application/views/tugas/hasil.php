<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/hasil.css">
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
        <a href="<?= base_url(); ?>tugas/hasil">Hasil Tugas</a>
    </div>

    <div class="judul">
        <div class="text1">TUGAS</div>
    </div>

    <div class="container">
        <div class="kumpul">
            <p>Yang Sudah Mengumpulkan</p>
        </div>

        <a href="">
            <div class=box>
                <p class="nama">Nama Murid</p>
                <img src="../img/tacoma2.jpeg" alt="">
                <div>
                    <p class="nilai">Nilai</p>
                </div>
            </div>
        </a>
    </div>