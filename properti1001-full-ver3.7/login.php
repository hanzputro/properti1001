<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css"/>
        <!--<link type="text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.css"/>-->
        <link type="text/css" rel="stylesheet" href="assets/css/font-awesome.min.css"/>
        <link type="text/css" rel="stylesheet" href="assets/css/style.css"/>
		
		<!-- JS -->		
		<script type="text/javascript" src="assets/js/vendor/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="assets/js/vendor/bootstrap.js"></script>
		
		<script type="text/javascript">
			var $ = jQuery.noConflict();

			$(document).ready(function() {
				$('#myCarousel1').carousel({
					interval: 5000,
					cycle: true
				});
			});
		</script>
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
						<a href="../home.php"><div class="logo-properti1001"></div></a>
					</div>
					<div class="span7 offset2">
						<div class="iklan"><p>SPACE IKLAN</p></div>
					</div>
				</div>			
			</div>	
		</div>
		<div id="line-orange"></div><!---- /Header ---->
		
		
        <div id="wrap" style=""><!---- Content ---->
			<p class="link-navigation-web"><a href="home.php">Home</a> / <a href="login.php">Login</a></p>
			<!-- #menu -->
            <div id="main-menu">
				<div class="navbar navbar-inverse navbar-static-top">
					<div class="navbar-inner navbar-inner2">
						<div class="container-fluid">				
							<ul class="nav nav2">
								<li><a class="active2" href="home.php"><i class="icon-home"></i> Properti</a></li>
								<li><a href="#"><i class="icon-group"></i> Agent Properti</a></li>                         
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
            <!-- /#menu -->
			
			<div class="row-fluid menu-account">
				<div class="span12">
					<div class="row-fluid">
						<div class="span4">
							<div id="main-login-menu">
								<div class="navbar navbar-inverse navbar-static-top">
									<div class="navbar-inner navbar-inner2">
										<div class="container-fluid">				
											<ul class="nav nav4">
												<li><a href="register.html"><i class="icon-home"></i> Register</a></li>
												<li><a href="login.php"><i class="icon-group"></i> Login</a></li>                            
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="span8">
							<div id="main-account-menu">
								<div class="navbar navbar-inverse navbar-static-top">
									<div class="navbar-inner navbar-inner2">
										<div class="container-fluid">				
											<ul class="nav nav5">
												<li><a class="active5" href="#"><i class="icon-home"></i> LOGIN</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>			
				</div>
			</div>
			<div class="row-fluid main-account jrk">
				<div class="span12">
					<div class="row-fluid">
						<div class="span4 tab-accountk tab-acc">
							<h3>BELUM TERDAFTAR?</h3>
							<p> Gratis! Hanya butuh 30 detik saja!</p>
							<a href="register.html" type="submit" value="LOGIN" class="btn btn-large btn-primary btn-daftar" >DAFTAR SEKARANG! <i class="icon-double-angle-right" style="margin-left:3px;"></i></a>
							<hr>
							<div class="row-fluid jrk">					
								<div class="span12">
									<div class="iklan"><p>SPACE IKLAN</p></div>
								</div>
							</div>
							<div class="row-fluid jrk">					
								<div class="span12">
									<div class="iklan"><p>SPACE IKLAN</p></div>
								</div>
							</div>
						</div>
						<div class="span8 tab-accountl tab-acc">
							<h3>LOGIN KE AKUN PROPERTI1001.COM</h3>
							<p> Silahkan login ke akun anda. Pastikan ingat username dan password anda!
							<hr>
							<div id="collapse3" class="accordion-body collapse in body">								
                                <form action="#" class="form-horizontal" id="inline-validate">
									<div class="alert alert-error">
										<a class="close" data-dismiss="alert" href="#">x</a>Email atau Password Anda Tidak Valid!
									</div>
                                    <div class="control-group">
                                        <label class="control-label2">Email Anda </label>
                                        <div class="controls2">
                                            <input type="text" id="username" name="username" class="span7">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label2">Password </label>
                                        <div class="controls2">
                                            <input type="password" id="password" name="password" class="span5">
                                        </div>
                                    </div>
									<div class="control-group">
										<div class="controls2">
											<label style="font-size:12px;">
												<input class="uniform" style="margin-top:-2px;" type="checkbox" value="option1" checked> ingat saya pada komputer ini
											</label>
										</div>
									</div>
									<div class="control-group">
                                        <label class="control-label2"></label>
                                        <div class="controls2">
                                            <input type="submit" value="LOGIN" class="btn btn-primary" style="padding:5px 20px; font-size:14px;"></input><a href="#"><font style="margin-left:10px; font-size:12px;">Lupa password?</font></a>
                                        </div>
                                    </div>
									<hr>
                                    <p class="bkn-a">Bukan anggota? <a href="#">Daftar Disini</a></p>
									<hr>
									<div class="span12 jrk">
										<div class="iklan"><p>SPACE IKLAN</p></div>
									</div>
                                </form>
                            </div>
						</div>
					</div>			
				</div>
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