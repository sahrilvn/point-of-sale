<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<table border="1">
			<thead>
				<tr>
					<th>No.</th>
					<th>Kelas</th>
					<th>Jurusan</th>
					<th>Sakit</th>
					<th>Izin</th>
					<th>Alfa</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 1;
				foreach ($data as $key) : ?>

					<tr>
						<td>
							<?= $i ?>
						</td>
						<td><?= $key['barang_nama'] ?></td>
						<td><?= $key['barang_merk'] ?></td>
						<td><?= $key['barang_ukuran'] ?></td>

					</tr>
				<?php $i++; endforeach; ?>
			</tbody>
</body>
</html>