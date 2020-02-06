<html>
  <head>
    <title>Data Manage Appoitment</title>
   
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
	<script src="<?php echo base_url().'assets/js/jquery1.js'?>"  type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/js/jquery-ui.js'?>"  type="text/javascript"></script>
	<link href="<?php echo base_url().'assets/js/jquery-ui.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">
	
  </head>
  <body>
  
    <div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->
		<h1><?=$tipe?> Form Data Appointment</h1>
	<script>

		$(function() {
		$( "#tanggal_appoitment" ).datepicker();
		});

		$(function() {
		$( "#tanggal_lahir" ).datepicker();
		});
	</script>
  
	<script type="text/javascript">
		function cekdata()
		{      	
			// Cek Nama Appointment
			if (formtambah.nama_appoitment.value=="")
			{
			alert("Nama Appointment tidak boleh kosong ...!");
			formtambah.nama_appoitment.focus();
			return false;
			}

			// Cek Tanggal Appointment
			if (formtambah.tanggal_appoitment.value=="")
			{
			alert("Tanggal Appointment tidak boleh kosong ...!");
			formtambah.tanggal_appoitment.focus();
			return false;
			}

			// Cek Tempat Lahir
			if (formtambah.tempat_lahir.value=="")
			{
			alert("Tanggal Lahir tidak boleh kosong ...!");
			formtambah.tempat_lahir.focus();
			return false;
			}

			// Cek Tanggal Lahir
			if (formtambah.tanggal_lahir.value=="")
			{
			alert("Tanggal Lahir tidak boleh kosong ...!");
			formtambah.tanggal_lahir.focus();
			return false;
			}

			// Cek Telepon
			if (formtambah.telepon.value=="")
			{
			alert("telepon tidak boleh kosong ...!");
			formtambah.telepon.focus();
			return false;
			}
			
			// Cek Alamat
			if (formtambah.alamat.value=="")
			{
			alert("Alamat tidak boleh kosong ...!");
			formtambah.alamat.focus();
			return false;
			}
		}
	</script>
  
		<form name="formtambah" method="post" class="form-horizontal" onSubmit = "return cekdata()">
		
			<div class="form-group">
				<label class="control-label col-sm-2">
				    	Nama Appointment				
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="nama_appoitment" id="nama_appoitment" placeholder="Nama Appointment">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">
				    	Tanggal Appointment				
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="tanggal_appoitment" id="tanggal_appoitment" placeholder="Tanggal Appointment">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">
				    	Tempat Lahir				
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">
				    	Tanggal Lahir			
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">
				    	Email				
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="email" id="email" placeholder="Email">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">
				    	Telepon/HP				
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">
				    	Alamat				
				</label>
				<div class="col-sm-8">
					<textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat"></textarea>
				</div>
			</div>
			
			<center>
				<button name="tombol_submit" class="btn btn-primary fa fa-check-square-o"> Simpan</button>
			</center>
		</form>
	</div>
</body>
</html>