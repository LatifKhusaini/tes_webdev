<div class="row m-4">
	<div class="col-12 col-md-12">
		<div class="card">
			<h5 class="card-header mb-3">Halaman Data Pegawai</h5>
			<div class="p-3">
				<a href="<?= base_url('index.php/welcome/add_pegawai');?>" class="btn btn-info btn-block mx-2"  >Tambah Pegawai</a>
            </div>

			<div class=" card-body">
			<div class="box-body">
					<div class="table-responsive">
					<table class="table table-borderless" id="dataPegawai">
						<thead>
							<tr>
								<th>No</th>
								<th>nama pegawai</th>
								<th>Jenis kelamin</th>
								<th>Telepon</th>
								<th>Alamat </th>
								<th>jabatan</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>  
							<?php

							if ($pegawai == null)
							{
								echo "<tr>";
								echo "<td class=\"text-center\" colspan=\"6\">Data Kosong</td>";
								echo "</tr>";
							}

							$no = 1;
							foreach ($pegawai as $u){
							?>
							
							<tr>
								<td><?=$no?></td>
								<td><?=$u->nama_pegawai?></td>
								<td><?=$u->jenis_kelamin?></td>
								<td><?=$u->telepon?></td>
								<td><?=$u->alamat?></td>
								<td><?=$u->jabatan?></td>
								<td class="d-flex">
									<!-- <a href="<?=base_url('index.php/admin/detail_pegawai/'.$u->id_pegawai)?>" class="btn btn-info fa fa-info " style="color:beige;"></a> -->
									<a href="<?=base_url('index.php/welcome/edit_pegawai/'.$u->id_pegawai)?>" class="btn btn-warning fa fa-edit mx-1" style="color:beige;"></a>
									<a href="<?=base_url('index.php/admin/del_pegawai/'.$u->id_pegawai)?>" class="btn btn-danger fa fa-trash " onClick="return confirm('Yakin ingin menghapus ?')"></a>
								</td>
							</tr>
							<?php
								$no++;
								}
							?>
						</tbody>
					</table>
					</div>
			</div>
     	</div>
  	</div>

	</div>
      </div>
	  
	  	<script>
		$(document).ready( function () {
			$('#dataPegawai').DataTable();
		} );

			
		</script>


<!-- awal Footer -->
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
    <script>
      $(".sidebar ul li").on("click", function () {
        $(".sidebar ul li.active").removeClass("active");
        $(this).addClass("active");
      });

      $('.open-btn').on('click', function(){
          $('.sidebar').addClass('active');
        });

        $('.close-btn').on('click', function(){
          $('.sidebar').removeClass('active');
        })
    </script>
	
	<?php if ($this->session->flashdata('success')) {?>   
        <script type="text/javascript">
            $(function(){
                swal("Success", "<?=$_SESSION['success']?>", "success");
            });
      </script>
    <?php }?>

    <?php if ($this->session->flashdata('failed')) {?>   
        <script type="text/javascript">
            $(function(){
                swal("Failed","<?=$_SESSION['failed']?>","error");
            });
        </script>
    <?php }?>

    <?php if ($this->session->flashdata('avaible')) {?>   
        <script type="text/javascript">
            $(function(){
                swal("Info","<?=$_SESSION['avaible']?>","warning");
            });
        </script>
    <?php }?>
  </body>
</html>
