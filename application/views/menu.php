<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
 
  <?php if($this->session->userdata('akses')=='1'):?>
      
 
  <?php elseif($this->session->userdata('akses')=='2'):?>
      <li class="active"><a href="<?php echo base_url().'index.php/page'?>">Dashboard</a></li>
      <li><a href="<?php echo base_url().'index.php/appoitment'?>">Form Appointment</a></li>
    
  <?php endif;?>
  </ul>

  <ul class="nav navbar-nav navbar-right">
    <li><a href="<?php echo base_url().'index.php/login/logout'?>" onclick="return confirm('Apakah anda yakin logout')">Logout</a></li>
  </ul>
</nav>
