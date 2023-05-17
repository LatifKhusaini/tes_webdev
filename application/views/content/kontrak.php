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
								$id = isset($kontrak) ? $kontrak->id_kontrak : 'null';
								echo form_open(base_url($link.'/'.$id));
							?>

								<label for="agama" class="control-label">Nama Pegawai</label>    								

								<select name="id_pegawai" id="id_pegawai" class="form-control">
								<option value="<?= isset($kontrak) ? $kontrak->id_pegawai : 'null'?>" ><?= isset($kontrak) ? $kontrak->nama_pegawai : 'null'?></option>
								<?php
									foreach ($pegawai as $u){
									?>
									<option value="<?=$u->id_pegawai?>" ><?=$u->nama_pegawai?></option>
									<?php
										}
									?>
								</select>

								<label for="agama" class="control-label">Jabatan</label>    								

								<select name="id_jabatan" id="id_jabatan" class="form-control">
								<option value="<?= isset($kontrak) ? $kontrak->id_jabatan : 'null'?>" ><?= isset($kontrak) ? $kontrak->jabatan : 'null'?></option>
								<?php
									foreach ($jabatan as $u){
									?>
									<option value="<?=$u->id_jabatan?>" ><?=$u->jabatan?></option>
									<?php
										}
									?>
								</select>

								<div class="form-group">
									<label for="nama" class="control-label">Nilai Kontrak</label>
									<?=form_input(array(
										'name' => 'nilai_kontrak',
										'id' => 'nilai_kontrak',
										'class' => 'form-control',
										'required' => 'required',
										'value' => isset($kontrak) ? $kontrak->nilai_kontrak : null,
										'autofocus' => 'autofocus'
									)) ?>
								</div>
								<div class="form-group">
									<label for="nama" class="control-label">Tanggal Awal</label>
									<?=form_input(array(
										'name' => 'tanggal_awal',
										'id' => 'tanggal_awal',
										'class' => 'form-control',
										'required' => 'required',
										'type' => 'date',
										'value' => isset($kontrak) ? $kontrak->tanggal_awal : null,
										'autofocus' => 'autofocus'
									)) ?>
								</div>
								<div class="form-group">
									<label for="nama" class="control-label">Tanggal Akhir</label>
									<?=form_input(array(
										'name' => 'tanggal_akhir',
										'id' => 'tanggal_akhir',
										'class' => 'form-control',
										'required' => 'required',
										'type' => 'date',
										'value' => isset($kontrak) ? $kontrak->tanggal_akhir : null,
										'autofocus' => 'autofocus'
									)) ?>
								</div>

								
								<?=form_hidden('id', isset($kontrak) ? $kontrak->id_kontrak : null)?>
								<div>
								<div class="row mt-4">
									<div class="col-md-6">
										<a href="<?=base_url('index.php/admin/data_kontrak')?>" class="btn btn-info btn-block text-white">Data Jabatan</a>
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
