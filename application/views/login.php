<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landing Page</title>
 
  <link href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">  
  <link href="<?php echo base_url().'assets/vendor/fontawesome-free/css/all.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/vendor/simple-line-icons/css/simple-line-icons.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/css/landing-page.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/css/menu.css'?>" rel="stylesheet">
  <script src="<?php echo base_url().'assets/js/jquery.slim.js'?>"</script>
  <script src="<?php echo base_url().'assets/js/popper.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/modal-boostrap.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery1.js'?>"  type="text/javascript"></script>
  <script src="<?php echo base_url().'assets/js/jquery-ui.js'?>"  type="text/javascript"></script>
  <link href="<?php echo base_url().'assets/js/jquery-ui.css'?>" rel="stylesheet">
  
  
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <a class="navbar-brand icon-menu" href="#"> lending Page</a>
		
	</div>
	</li>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Register</button>
	</div>
  </nav>
  
<header class="masthead text text-center">
    <div class="container">
		<div class="row">
			<div class="col-md-4 col-lg-2 col-xl-9 mx-auto">
				<h2>Log in Appointment</h2>
				<center><form class="form-signin" action="<?php echo base_url().'index.php/login/auth'?>" method="post">
            
					<?php echo $this->session->flashdata('msg');?>
					<div class="col-6">
						<input type="text" class="form-control form-control-lg" id="username" name="username" class="form-control" placeholder="Email" required autofocus>
					</div>
        
					<div class="col-6">
						<input type="password" class="form-control form-control-lg" id="password" name="password" class="form-control" placeholder="Password" required>
					</div>
					
					<div class="col-5 col-md-3">
						<button class="btn btn-lg btn-primary" type="submit">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
					<div class="features-icons-icon d-flex">
						<i class="icon-user-following m-auto text-primary"></i>
					</div>
					icon-user-following
				</div>
			</div>
			<div class="col-lg-4">
				<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
					<div class="features-icons-icon d-flex">
						<i class="icon-menu m-auto text-primary"></i>
					</div>
					icon-menu
				</div>
			</div>
			<div class="col-lg-4">
				<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
					<div class="features-icons-icon d-flex">
						<i class="icon-directions m-auto text-primary"></i>
					</div>
					icon-directions
				</div>
			</div>
			<div class="col-lg-4">
				<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
					<div class="features-icons-icon d-flex">
						<i class="icon-screen-desktop m-auto text-primary"></i>
					</div>
					icon-screen-desktop
				</div>
			</div>
			<div class="col-lg-4">
				<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
					<div class="features-icons-icon d-flex">
						<i class="icon-screen-smartphone m-auto text-primary"></i>
					</div>
					icon-screen-smartphone
				</div>
			</div>
			<div class="col-lg-4">
				<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
					<div class="features-icons-icon d-flex">
						<i class="icon-crop m-auto text-primary"></i>
					</div>
					icon-crop
				</div>
			</div>
			<div class="col-lg-4">
				<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
					<div class="features-icons-icon d-flex">
						<i class="icon-doc m-auto text-primary"></i>
					</div>
					icon-doc
				</div>
			</div>
			<div class="col-lg-4">
				<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
					<div class="features-icons-icon d-flex">
						<i class="icon-login m-auto text-primary"></i>
					</div>
					icon-login
				</div>
			</div>
			<div class="col-lg-4">
				<div class="features-icons-item mx-auto mb-0 mb-lg-3">
					<div class="features-icons-icon d-flex">
						<i class="icon-check m-auto text-primary"></i>
					</div>
					icon-check
				</div>
			</div>
		</div>
    </div>
  </section>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>


	<!-- Modal Form Register -->

	<script>
	
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
			// cek nama
			if (formtambah.nama.value=="")
			{
				alert("nama tidak boleh kosong ...!");
				formtambah.nama.focus();
				return false;
			}
		}
	</script>

<div class="container">

  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal-->
		<div class="modal-content">
			<!-- heading modal -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
         
			</div>
			<!-- body modal -->
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-lg-2 col-xl-9 mx-auto">
						<h2><center>Register Appointment</center></h2>
						<center><form name="formtambah" method="post" class="form-horizontal"  onSubmit = "return cekdata()" action="<?php echo base_url().'index.php/user_register/add'?>" method="post">
            
					<div class="form-group">
						<div class="form-group">
							<label class="control-label col-sm-2"></label>
							<div class="col-sm-12">
								<input type="text" class="form-control" name="email" id="email" placeholder="Email">
							</div>
						</div>
					
						<div class="form-group">
							<label class="control-label col-sm-2"></label>					
							<div class="col-sm-12">
								<input type="password" class="form-control" id="password" name="password" placeholder="password">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2"></label>
							<div class="col-sm-12">
								<input type="text" class="form-control" name="tgl_registrasi" id="tgl_registrasi" placeholder="Tanggal Registrasi">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-2"></label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="nama" name="nama" placeholder="Your Name" >
							</div>
						</div>
				
			
						<div class="form-group">
							<label class="control-label col-sm-2"></label>
							<div class="col-sm-12">
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
							<div class="col-sm-12">
								<select id="level" class="form-control" id="level" name="level">
								<option value="2">User</option>

								</select>
							</div>
						</div>
			
						<center>
							<button name="tombol_submit" class="btn btn-primary icon-check">	Create Account</button>
							<a href="<?php echo base_url().'index.php/login'?>" class='btn btn-primary icon-close'> Kembali</a>
						</center>
						
						</form>
						</div>
					</div>
				</div>
				<!-- footer modal -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
    </div>
</div>