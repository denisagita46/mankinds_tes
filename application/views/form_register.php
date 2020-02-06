<html>
  <head>
    <title>Data Registrasi</title>
   
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
	<script src="<?php echo base_url().'assets/js/jquery1.js'?>"  type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/js/jquery-ui.js'?>"  type="text/javascript"></script>
	<link href="<?php echo base_url().'assets/js/jquery-ui.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">
  </head>
  <body>

    <div class="container">
      <?php $this->load->view('header');?> <!--Include menu-->
		<h1><?=$tipe?> Register Appointment</h1>
	 <script>
		function hanyaAngka(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		return false;
		return true;
		}
	
	
		$(function() {
		$( "#tgl_registrasi" ).datepicker();
		});
  
    </script>
	
    <script type="text/javascript">
		function cekdata()
		{
		// Cek Email
		if (formtambah.email.value=="")
		{
			alert("Email tidak boleh kosong ...!");
			formtambah.email.focus();
			return false;
		}	
		// Cek Password 
		if (formtambah.password.value=="")
		{
			alert("password tidak boleh kosong ...!");
			formtambah.password.focus();
			return false;
		}
		if (formtambah.nama.value=="")
		{
			alert("nama tidak boleh kosong ...!");
			formtambah.nama.focus();
			return false;
		}
		}
	</script>
		
	<form name="formtambah" method="post" class="form-horizontal"  onSubmit = "return cekdata()">
		<div class="form-group">
					<div class="form-group">
						<label class="control-label col-sm-2"></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" id="email" placeholder="Email">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-2"></label>					
						<div class="col-sm-5">
							<input type="password" class="form-control" id="password" name="password" placeholder="password">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2"></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="tgl_registrasi" id="tgl_registrasi" placeholder="Tanggal Registrasi">
						</div>
						
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2"></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Your Name" >
						</div>
					</div>
				
			
					<div class="form-group">
							<label class="control-label col-sm-2"></label>
						<div class="col-sm-5">
							<select id="status_pekerjaan" class="form-control" id="status_pekerjaan" name="status_pekerjaan">
								<option value="Marketing">Marketing</option>
								<option value="Product Management">Product Management</option>
								<option value="Softwere Development">Softwere Development</option>
								<option value="Desaign">Desaign</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
							<label class="control-label col-sm-2"></label>
							<div class="col-sm-5">
								<select id="level" class="form-control" id="level" name="level">
								<option value="2">User</option>

								</select>
							</div>
					</div>
			
				<center>
				<button name="tombol_submit" class="btn btn-primary fa fa-check-square-o">
					Create Account
				</button>
				<a href="<?php echo base_url().'index.php/login'?>" class='btn btn-primary fa fa-check-square-o'>Kembali</a>
				</center>
		</div>
	</form>
</body>
</html>