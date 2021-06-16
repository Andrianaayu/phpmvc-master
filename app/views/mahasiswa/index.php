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
						<th scope="col" width="200px">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data['mhs'] as $mhs) :?>
						<tr>
							<td><?= $mhs['nama'];?></td>
							<td>
								<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-success badge-pill">Detail</a>

								<button class="badge badge-warning badge-pill" data-toggle="modal" data-target="#exampleModal<?= $mhs['id'];?>" data-id="<?= $mhs['id'] ?>" data-zurl="<?= BASEURL; ?>">Edit</button>
								<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>

								<div class="modal fade" id="exampleModal<?= $mhs['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog"  role="document">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Edit Mahasiswa Penerima</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form action="<?= BASEURL; ?>/mahasiswa/updateMahasiswa" method="POST" enctype="multipart/form-data">
											<input type="hidden" name="id" value="<?= $mhs['id'];?>" id="id">
													<div class="form-group">
												<label for="nim">Nim</label>
												<input type="text" name="nim" value="<?= $mhs['nim'];?>" id="nim" class="form-control" placeholder="Masukkan nim" required="true">
											</div>
											<div class="form-group">
												<label for="nama">Nama</label>
												<input type="text" name="nama" id="nama" value="<?= $mhs['nama'];?>" class="form-control" placeholder="Masukkan nama" required="true">
											</div>
											<div class="form-group">
												<label for="jurusan">Jurusan</label>
												<select name="jurusan" id="jurusan" class="form-control" required="true">
													<option>-- Pilih Jurusan--</option>
													<option value="Sistem Informasi" <?= $mhs['jurusan'] == 'Sistem Informasi' ? 'selected' : '' ?>>Sistem Informasi</option>
													<option value="Teknologi Informasi">Teknologi Informasi</option>
													<option value="Informatika">Informatika</option>
												</select>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Simpan</button>
										</div>
										</form>
									</div>
								</div>
								</div>

							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>		
				<button type="button" class="btn btn-primary btnTambahData" data-toggle="modal" data-target="#exampleModal" data-zurl="<?= BASEURL; ?>">
					Cantumkan nama anda
				</button>
		</div>
	</div>
</div>

<!-- <div class="container mt-3">
	<form action="<?= BASEURL; ?>/mahasiswa/updateMahasiswa" method="POST" enctype="multipart/form-data">
		<input class="form-control form-control-lg mt-2" type="text" readonly="true" name="nim" placeholder="NIM" value="<?= $data['mhs']['nim']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="nama" placeholder="Nama" value="<?= $data['mhs']['nama']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="jurusan" placeholder="Jurusan" value="<?= $data['mhs']['jurusan']; ?>">
		<input type="submit" value="simpan" class="btn btn-success mt-2">
		<a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-primary mt-2">Kembali</a>
	</form>
</div> -->
<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?= BASEURL; ?>/mahasiswa/simpanmahasiswa" method="POST" enctype="multipart/form-data">
      		<input type="hidden" name="id" id="id">
					<div class="form-group">
	        	<label for="nim">Nim</label>
	        	<input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan nim" required="true">
	        </div>
	        <div class="form-group">
	        	<label for="nama">Nama</label>
	        	<input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama" required="true">
	        </div>
	        <div class="form-group">
	        	<label for="jurusan">Jurusan</label>
	        	<select name="jurusan" id="jurusan" class="form-control" required="true">
	        		<option>-- Pilih Jurusan--</option>
	        		<option value="Sistem Informasi">Sistem Informasi</option>
	        		<option value="Teknologi Informasi">Teknologi Informasi</option>
	        		<option value="Informatika">Informatika</option>
	        	</select>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
      	</form>
    </div>
  </div>
</div> -->

