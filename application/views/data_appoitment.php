<html>
  	<head>
    	<title>Data Appointment</title>
   
    	<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
		<link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">
	
  	</head>
  <body>

    <div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->

	<a href="appoitment/add" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Data</a>
	<center>
	<table class="table table-striped ">

		<thead>
			<tr>
			    <th>No</th>
				<th>Nama Appointment</th>
				<th>Tanggal Appointment</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Email</th>
				<th>Telepon</th>
				<th>Alamat</th>
				<th><center>Action</center></th>
			</tr>
		</thead>
		<tbody>
		
			<?php
				$no = 1; 
				foreach($appoitment as $row){
				echo "
				<tr>
			        <td>$no</td>
					<td>$row[nama_appoitment]</td>
					<td>$row[tanggal_appoitment]</td>
					<td>$row[tempat_lahir]</td>
					<td>$row[tanggal_lahir]</td>
					<td>$row[email]</td>
				    <td>$row[telepon]</td>
					<td>$row[alamat]</td>

					<td><a href='appoitment/edit/$row[id_appoitment]' class='btn btn-sm btn-info fa fa-edit'> Edit</a></td>
					<td><a class='btn btn-sm btn-danger ' href='appoitment/delete/$row[id_appoitment]'> Hapus</a></td>
				</tr>
				";
				$no++;
				}
			?>
		</tbody>
	</table>
</div>
</body>
</html>
