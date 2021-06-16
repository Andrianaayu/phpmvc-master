<div class="container mt-3">
	<div class="row">
		<div class="col-sm-12">
			<?php
				Flasher::Message();
			?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<h1>Data Mahasiswa</h1>
			<table class="table table-stripped">
				<thead>
					<tr>
						<th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Jurusan</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data['mhs'] as $mhs) :?>
						<tr>
							<td><?= $mhs['nama'];?></td>
                            <td><?= $mhs['nim'];?></td>
                            <td><?= $mhs['jurusan'];?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>		
		</div>
	</div>
</div>

