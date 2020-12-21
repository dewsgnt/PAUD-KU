<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/login.css">
</head>

</head>

<body>

    <div class="container">

        <div class="form">
            <p class="masuk">Masuk, <br> yuk!</p>
            <?= $this->session->flashdata('message'); ?>
            <?php if (validation_errors()) : ?>
                <div style="background-color:#ff4848; text-align: center; ">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <form action="<?= base_url(); ?>auth" method="post">
                <ul>
                    <li>
                        <label class="nama" for="username">Nama Pengguna</label>
                        <input type="text" id="username" size="30px" name="username">
                    </li>
                    <li>
                        <label class="nama" for="password">Kata Sandi</label>
                        <input type="password" id="password" name="password">
                    </li>
                    <li>
                        <button type="submit" name="masuk">Masuk</button>

                    </li>
                </ul>
            </form>
        </div>

    </div>
    <div class="side">
        <p class="paud"> PAUD </p>
        <p class="cempaka"> CEMPAKA</p>
    </div>