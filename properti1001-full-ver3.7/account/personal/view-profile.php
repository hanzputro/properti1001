<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="../../assets/css/bootstrap.css"/>
        <!--<link type="text/css" rel="stylesheet" href="../../assets/css/bootstrap-responsive.css"/>-->
        <link type="text/css" rel="stylesheet" href="../../assets/css/font-awesome.min.css"/>
        <link type="text/css" rel="stylesheet" href="../../assets/css/style.css"/>
		
		<!-- JS -->		
		<script type="text/javascript" src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="../../assets/js/vendor/bootstrap.js"></script>
		
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
										<li><p>WELCOME, HANZPUTRO</p></li>
										<li><a href="#">PROPERTI TERPILIH <span class="label label-warning" style="margin-left:2px;">3</span></a></li>
										<li><a href="#">PENCARIAN TERSIMPAN <span class="label label-warning" style="margin-left:2px;">0</span></a></li>
										<li><a href="#LoginModal" data-original-title="Help" data-toggle="modal">LOGOUT</a></li>                                              
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
						<div class="logo-properti1001"></div>
					</div>
					<div class="span7 offset2" >
						<div class="iklan"><p>SPACE IKLAN</p></div>
					</div>
				</div>			
			</div>	
		</div>
		<div id="line-orange"></div><!---- /Header ---->
		
		<!---- Content ---->
        <div id="wrap" style="">
			<p class="link-navigation-web"><a href="../../home.php">Home</a> / <a href="view-profile.php">View Profile</a></p>
			<!-- #menu -->
            <div id="main-menu">
				<div class="navbar navbar-inverse navbar-static-top">
					<div class="navbar-inner navbar-inner2">
						<div class="container-fluid">				
							<ul class="nav nav2">
								<li><a class="" href="../../home.php"><i class="icon-home"></i> Properti</a></li>
								<li><a href="../../list-agent.php"><i class="icon-group"></i> Agent Properti</a></li>                                
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
						<div class="span12">
							<div id="main-account-menu">
								<div class="navbar navbar-inverse navbar-static-top">
									<!-- Menu Account -->
									<div class="navbar-inner">
										<div class="pull-left">				
											<ul class="nav nav5">
												<li>
													<a class="" href="javascript:void(0)"><i class="icon-briefcase"></i> PERSONAL ACCOUNT </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="my-account.php">Dashboard <i class="icon-coffee pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="change-pass.php">Change Password <i class="icon-exchange pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
												</li>
												<li>
													<a class="active5" href="javascript:void(0)"><i class="icon-user-md"></i> PROFILE </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="view-profile.php">View Profile <i class="icon-eye-open pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="edit-profile.php">Edit Profile <i class="icon-wrench pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
												</li>
												<li>
													<a class="" href="javascript:void(0)"><i class="icon-folder-open-alt"></i> LISTING </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="my-listing.php">My Listing <i class="icon-folder-open-alt pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="newpost-listing.php">Post New Listing <i class="icon-certificate pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="expired-listing.php">Expired Listing <i class="icon-ban-circle pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
												</li>
												<li>
													<a class="" href="javascript:void(0)"><i class="icon-magic"></i> TOOLS </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="properti-pilihan.php">favorite properties <i class="icon-heart-empty pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="inbox.php">Inbox <i class="icon-comment pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="inbox.php">CS &amp; Agent / Personal <i class="icon-comments pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
												</li>
											</ul>
											<div style="clear:both;"></div>
										</div>		
									</div>
									<!-- /Menu Account -->
								</div>
							</div>
						</div>
					</div>			
				</div>
			</div>
			
			<div class="row-fluid main-account jrk">
				<div class="span12">
					<div class="row-fluid">
						<div class="span12 tab-accountl tab-acc" style="margin-bottom:50px;">
							<h3>My Profile</h3>
							<!--
							<p>Pastikan password lama anda dan silahkan menggantinya.</p>
							-->
							<hr style="margin:10px 0px 20px 0px">
							<div class="bg-agnt-detail-out-view">
								<div class="row-fluid">
									<!----- image ----->
									<div class="span2 agnt-detail-photo-view">
										<img src="../../assets/img/agent-photos.png" alt="" style="width:100%;"/>
									</div>
									<!----- /image ----->
									<!----- Penjelasan Agent ----->
									<div class="span10">
										<div class="row-fluid">
											<div class="span8 desc-name-agnt-spec-view">
												<h3>Mr. Hanzputro</h3>
												<h5>Independent Property Agent</h5>
												<p>Spesialis Area: Jakarta Timur, Bekasi, Tambun.</p>
											</div>
											<div class="span4">
												<img src="../../assets/img/agent-logo.png" alt="" style="width:100%;"/>
											</div>		
										</div>
										<div class="hr3-view"></div>
										<div class="row-fluid">
											<div class="span4 desc-alamat-agnt-det-view">
												<p>No Telp: +62 81276452233</p>
												<p>No HP: +021 8876543</p>
												<p>Website: Hanzputro.com</p>
												<p>Email: Hanzputro@gmail.com</p>
											</div>	
											<div class="span8 desc-dll-agnt-det-view">
												<!--<h5>Perkenalan</h5>-->
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
													sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
												</p>
											</div>	
										</div>
										<a href="#" class="btn btn-primary" style="padding:7px 15px; margin:12px 5px 12px 0px;font-size:16px;font-weight:bold;"><i class="icon-facebook-sign"></i> Share With Facebook</a>
										<a href="#" class="btn btn-info" style="padding:7px 15px; margin:12px 0px 12px 0px;font-size:16px;font-weight:bold;"><i class="icon-twitter-sign"></i> Share With Twitter</a>
									</div>
								</div>
							</div>
						</div>
						
					</div>			
				</div>
			</div>
        </div>
		<!---- /Content ---->
        
		
		
        <!---- footer ---->
		<?php 
			include "../../component/footer.php";
		?>			
		<!---- /footer ---->			
		
		<!---- login-modal ---->
		<?php 
			include "../../component/login-modal.php";
		?>			
		<!---- /login-modal ---->			
		
    </body>
</html>