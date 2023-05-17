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
								$id = isset($jabatan) ? $jabatan->id_jabatan : 'null';
								echo form_open(base_url($link.'/'.$id));
							?>

								<div class="form-group">
									<label for="user" class="control-label">Kode Jabatan</label>
									<?=form_input(array(
										'name' => 'kode_jabatan',
										'id' => 'kode_jabatan',
										'class' => 'form-control',
										'value' => isset($jabatan) ? $jabatan->kode_jabatan : null,
										'required' => 'required'
									)) ?>
								</div>
								<div class="form-group">
									<label for="nama" class="control-label">Nama Jabatan</label>
									<?=form_input(array(
										'name' => 'nama',
										'id' => 'nama',
										'class' => 'form-control',
										'required' => 'required',
										'value' => isset($jabatan) ? $jabatan->jabatan : null,
										'autofocus' => 'autofocus'
									)) ?>
								</div>
						
								<?=form_hidden('id', isset($jabatan) ? $jabatan->id_jabatan : null)?>
								<div>

								<div class="row mt-4">
									<div class="col-md-6">
										<a href="<?=base_url('index.php/admin/data_jabatan')?>" class="btn btn-info btn-block text-white">Data Jabatan</a>
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
