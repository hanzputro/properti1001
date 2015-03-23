<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" type="image/png" href="assets/img/properti1001-favicon.png"/>
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css"/>
        <!--<link type="text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.css"/>-->
        <link type="text/css" rel="stylesheet" href="assets/css/font-awesome.min.css"/>
        <link type="text/css" rel="stylesheet" href="assets/css/style.css"/>
		<link type="text/css" rel="stylesheet" href="assets/css/featured-post-slider.css"/>
		<link type="text/css" rel="stylesheet" href="assets/css/jquery.bxslider.css"/>
		
		<!-- JS -->		
		<script type="text/javascript" src="assets/js/vendor/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="assets/js/vendor/bootstrap.js"></script>
		<script type="text/javascript" src="assets/js/jquery-ui-1.9.0.custom.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery-ui-tabs-rotate.js"></script>
		<script type="text/javascript" src="assets/js/jquery.bxslider.js"></script>
		
    </head>
	
	
    <body>		
		<div id="nav-body"><!---- Header ---->
			<div id="nav-login">
				<div id="top">
					<div class="navbar navbar-inverse navbar-static-top">
						<div class="navbar-inner">
							<div class="container-fluid">
								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</a> 
								<div class="nav-collapse collapse">							
									<ul class="nav pull-right">
										<li><p>WELCOME, GUEST</p></li>
										<li><a href="#">PROPERTI TERPILIH <span class="label label-warning" style="margin-left:2px;">3</span></a></li>
										<li><a href="#">PENCARIAN TERSIMPAN <span class="label label-warning" style="margin-left:2px;">0</span></a></li>
										<li><a href="#LoginModal" data-original-title="Help" data-toggle="modal">LOGIN</a></li>                                    
									</ul>						
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>		
		<div id="logo-body">
			<div id="logo-wrap">
				<div class="row-fluid">
					<div class="span3">
						<a href="home.php"><div class="logo-properti1001"></div></a>
					</div>
					<div class="span7 offset2" >
						<div class="iklan"><p>SPACE IKLAN</p></div>
					</div>
				</div>			
			</div>	
		</div>
		<div id="line-orange"></div><!---- /Header ---->		
		
        <div id="wrap"><!-- Content -->
			<p class="link-navigation-web"><a href="home.php">Home</a> / <a href="about-us.php">About</a></p>
			<!-- menu -->
            <div id="main-menu">
				<div class="navbar navbar-inverse navbar-static-top">
					<div class="navbar-inner navbar-inner2">
						<div class="container-fluid">				
							<ul class="nav nav2">
								<li><a class="active2" href="home.php"><i class="icon-home"></i> Properti</a></li>
								<li><a href="list-agent.php"><i class="icon-group"></i> Agent Properti</a></li> 
							</ul>
							<!--
							<ul class="nav nav3 pull-right">
								<li><a href="file.html"><i class="icon-thumbs-up"></i> Iklankan Propertimu</a></li>                                 
							</ul>
							-->
						</div>
					</div>
				</div>
			</div>
            <!-- /menu -->
						
			<div class="row-fluid">
				<div class="span12"><!-- span12 -->
					<div class="row-fluid">					
						<div class="span9 box-text-main" style="">
							<center><h3>PANDUAN PENGGUNAAN</h3></center>
							<br>
							<ol>
								<li>
									<p>
										Bagi Pemilik Properti langsung yang ingin menjual properti.
									</p>
									<ol type="A" class="ul-text">
										<li>
											<b>CARA MENDAFTAR</b><br>
											<img src="assets/img/alur-daftar.jpg">
											<br>
										</li>
										<li>
											<b>CARA POST LISTINGAN</b><br>
											<img src="assets/img/alur-post-listing-private.jpg">
											<p><i>
												*Selama masa promosi Juni-September 2014, saat mendaftar Anda langsung mendapat 
												bonus 20 listingan yang bisa langsung Anda gunakan.
											</i></p>
											<br>
										</li>
									</ol>
									<br>
									<br>
									<br>
									<br>
								</li>

								<li>
									<p>
										Bagi Agen Properti yang ingin menjual properti.
									</p>
									<ol type="A" class="ul-text">
										<li>
											<b>DAFTAR</b><br>
											<img src="assets/img/alur-daftar.jpg">
											<br>
										</li>
										<li>
											<b>DEPOSIT</b><br>											
											<img src="assets/img/alur-deposit.jpg">
											<p><i>
												*Selama masa promosi Juni-September 2014, saat mendaftar Anda langsung mendapat 
												bonus saldo sebesar Rp 1.000.000 yang bisa langsung Anda gunakan.
											</i></p>
											<br>
										</li>
										<li>
											<b>BELI PAKET</b><br>
											<img src="assets/img/alur-beli-paket.jpg">
											<br>
										</li>
										<li>
											<b>POST LISTINGAN</b><br>
											<img src="assets/img/alur-post-listing-agent.jpg">
											<br>
										</li>
									</ol>
								</li>
							</ol>
						</div><!-- /span9 out -->
						
						
						<!---- Sidebar ---->
						<?php 
							include "component/sidebar.php";
						?>			
						<!---- /Sidebar ---->
					</div>  
				</div><!----- /span12 ----->
			</div>
        </div><!---- /Content ---->
        
		<!---- footer ---->
		<?php 
			include "component/footer.php";
		?>			
		<!---- /footer ---->			
		
		<!---- login-modal ---->
		<?php 
			include "component/login-modal.php";
		?>			
		<!---- /login-modal ---->			
    </body>
</html>