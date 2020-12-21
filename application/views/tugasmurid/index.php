<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/tugas.css">

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
        <a href="<?php if ($user['role_id'] == 1) : ?>
                <?= base_url(); ?>tugas
            <?php endif; ?>
            <?php if ($user['role_id'] == 2) : ?>
                <?= base_url(); ?>tugasmurid
            <?php endif; ?>">Tugas</a>
    </div>

    <div class="judul">
        <div class="text1">TUGAS</div>
    </div>
    <?= $this->session->flashdata('message'); ?>

    <?php foreach ($tugas as $tgs) : ?>
        <div class="container">
            <div class="boxtugas">
                <div>
                    <p class="tanggal"><?= $tgs['tanggal'] ?></p>
                </div>
                <div>
                    <table cellpadding='8' cellspacing='0'>
                        <tr>
                            <th><?= $tgs['judul'] ?></th>
                        </tr>
                        <tr>
                            <td><?= nl2br($tgs['deskripsi']); ?></td>
                        </tr>
                    </table>
                </div>
                <div class="upload">

                    <?= form_open_multipart('tugasmurid/kumpulkan'); ?>
                    <ul>
                        <li>
                            <label for="gambar" id="gambar">Pilih Gambar</label>
                            <input type="file" name="gambar" id="gambar">
                        </li>
                        <li>
                            <div class="kumpulkanbox">

                                <button type="submit" class="kumpulkan" name="kumpulkan">Kumpulkan</button>

                            </div>
                        </li>
                    </ul>
                    </form>
                </div>

            </div>
        </div>
    <?php endforeach; ?>