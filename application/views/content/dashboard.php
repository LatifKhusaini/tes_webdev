<div class="row m-4">
	<div class="col-12 col-md-12">
		<div class="card">
			<h5 class="card-header mb-3">Dashboard Utama</h5>
			<div class="p-3">
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
