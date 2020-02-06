<html>
 	 	<head>
    		<title>Data Appointment</title>
   
    		<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
			<script src="<?php echo base_url().'assets/js/jquery1.js'?>"  type="text/javascript"></script>
			<script src="<?php echo base_url().'assets/js/jquery-ui.js'?>"  type="text/javascript"></script>
			<link href="<?php echo base_url().'assets/js/jquery-ui.css'?>" rel="stylesheet">
			<link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">
	
  		</head>
  	<body>
	
	<script>

		$(function() {
		$( "#tanggal_appoitment" ).datepicker();
		});

		$(function() {
		$( "#tanggal_lahir" ).datepicker();
		});
	</script>
  
	<div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->
	
		<form name="formtambah" method="post" class="form-horizontal" onSubmit = "return cekdata()">
		
		 <?php foreach ($default as $row): ?>
			<div class="form-group">
				<label class="control-label col-sm-2">
                 Nama Appointment
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="nama_appoitment" value="<?php echo $row['nama_appoitment']; ?>" id="nama_appoitment"  placeholder="Nama Appointment">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
                 Tanggal Appointment 
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="tanggal_appoitment" value="<?php echo $row['tanggal_appoitment']; ?>" id="tanggal_appoitment"  placeholder="tanggal appoitment">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
                  Tempat lahir				
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="tempat_lahir" value="<?php echo $row['tempat_lahir']; ?>" id="tempat_lahir" placeholder="Tempat Lahir">
				</div>
            </div>
            <div class="form-group">
				<label class="control-label col-sm-2">
                 Tanggal lahir 
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" id="tanggal_lahir"  placeholder="Tanggal Lahir">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
                  Email				
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" id="email" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
                  Telepon				
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="telepon" value="<?php echo $row['telepon']; ?>" id="telepon" placeholder="Telepon">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				  Alamat				
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat']; ?>" id="alamat" placeholder="Alamat">
				</div>
            </div>
		
				<center>
			    	 <a href="<?php echo base_url().'index.php/appoitment'?>" class='btn btn-primary'>Kembali</a>
					<button name="tombol_submit" class="btn btn-primary">Update</button>
				</center>
			<?php endforeach; ?>
		</form>
	</div>
</body>
