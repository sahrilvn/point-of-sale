<!DOCTYPE html>
<html>
  <head>
    <title>Masuk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url().'assets/css/stylesl.css'?>" rel="stylesheet">
	
   
  </head>
  <body class="login-bg">
  

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <!--<img width="310px" src="<?php echo base_url().'assets/img/logo.png'?>"/>-->
			                <p><?php echo $this->session->flashdata('msg');?></p>
	                        <hr/>
	                        <?php echo form_open('administrator/cekuser') ?>
	                        	<input class="form-control" type="text" name="user_username" placeholder="Username" required autocomplete="off">
				                <input class="form-control" type="password" name="user_password" placeholder="Password" style="margin-bottom:1px;" required autocomplete="off">
				                <div class="action">
				                    <button name="Login" type="submit" class="btn btn-lg " style="width:310px;margin-top:0px; bg-color:#ff9000;">Login</button>
				                </div>
	                        <?php echo form_close() ?>
			                                
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    
  </body>
</html>