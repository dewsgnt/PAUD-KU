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
		<a href="<?= base_url(); ?>tugas">Tugas</a>
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

				<div class="kumpul">
					<a href="<?= base_url(); ?>tugas/hasil">Lihat yang sudah mengumpulkan tugas di sini</a>
				</div>

				<div class="pilihan">
					<a href="<?= base_url(); ?>tugas/edit/<?= $tgs['id']; ?>">
						<button class="edit">Edit Tugas</button>
					</a>

					<a href="<?= base_url(); ?>tugas/hapus/<?= $tgs['id']; ?>">
						<button class="hapus" onclick="return confirm('yakin ingin menghapus?');">Hapus Tugas</button>
					</a>

				</div>
			</div>
		</div>
	<?php endforeach; ?>

	<div class="box">
		<a href="<?= base_url(); ?>tugas/tambah">
			<button class="tambah">Tambah Tugas</button>
		</a>
	</div>