<div class="row m-4">
	<div class="col-12 col-md-12">
		<div class="card">

			<div class="box box-warning">
				<div class="box-body p-3">
					<h3><?=$title?></h3>
					<hr>
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<?php
								$id = isset($pegawai) ? $pegawai->id_pegawai : 'null';
								echo form_open(base_url($link.'/'.$id));
							?>

		
								<div class="form-group">
									<label for="nama" class="control-label">Nama Pegawai</label>
									<?=form_input(array(
										'name' => 'nama',
										'id' => 'nama',
										'class' => 'form-control',
										'required' => 'required',
										'value' => isset($pegawai) ? $pegawai->nama_pegawai : null,
										'autofocus' => 'autofocus'
									)) ?>
								</div>
								<div class="form-group">
									<label for="nama" class="control-label">Jenis Kelamin</label>
									<?=form_input(array(
										'name' => 'jenis_kelamin',
										'id' => 'jenis_kelamin',
										'class' => 'form-control',
										'required' => 'required',
										'value' => isset($pegawai) ? $pegawai->jenis_kelamin : null,
										'autofocus' => 'autofocus'
									)) ?>
								</div>
								<div class="form-group">
									<label for="nama" class="control-label">Telepon</label>
									<?=form_input(array(
										'name' => 'telepon',
										'id' => 'telepon',
										'class' => 'form-control',
										'required' => 'required',
										'type' => 'number',
										'value' => isset($pegawai) ? $pegawai->telepon : null,
										'autofocus' => 'autofocus'
									)) ?>
								</div>
								<div class="form-group">
									<label for="nama" class="control-label">Alamat</label>
									<?=form_input(array(
										'name' => 'alamat',
										'id' => 'alamat',
										'class' => 'form-control',
										'required' => 'required',
										'value' => isset($pegawai) ? $pegawai->alamat : null,
										'autofocus' => 'autofocus'
									)) ?>
								</div>

								<label for="agama" class="control-label">Jabatan</label>    								

                                <select name="id_jabatan" id="id_jabatan" class="form-control">
								<option value="<?= isset($pegawai) ? $pegawai->id_jabatan : 'null'?>" ><?= isset($pegawai) ? $pegawai->jabatan : 'null'?></option>
								<?php
									foreach ($jabatan as $u){
									?>
									<td><?=$u->jenis_kelamin?></td>
									 <option value="<?=$u->id_jabatan?>" ><?=$u->jabatan?></option>
									<?php
										}
									?>
                                </select>
						
								<?=form_hidden('id', isset($pegawai) ? $pegawai->id_pegawai : null)?>
								<div>

								<div class="row mt-4">
									<div class="col-md-6">
										<a href="<?=base_url('index.php/admin/data_pegawai')?>" class="btn btn-info btn-block text-white">Data Jabatan</a>
									</div>
									<div class="col-md-6 mt-2">
										<?=form_submit(array(
											'name' => $button,
											'value' => strtoupper($button),
											'class' => 'btn btn-primary btn-block'
										))?>
									</div>
								</div>
									
								</div>
							<?php
							form_close()
							?>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>
