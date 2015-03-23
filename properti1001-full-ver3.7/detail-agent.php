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
		<script type="text/javascript" src="assets/js/bootstrap-paginator.js"></script>
		
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
						<a href="home.php"><div class="logo-properti1001"></div></a>
					</div>
					<div class="span7 offset2" >
						<div class="iklan"><p>SPACE IKLAN</p></div>
					</div>
				</div>			
			</div>	
		</div>
		<div id="line-orange"></div><!---- /Header ---->
		
		
        <div id="wrap" style="background:#fff;"><!---- Content ---->
			<p class="link-navigation-web" style="color:#ffa200;"><a href="home.php" style="color:#333;text-shadow:none;">Home</a> / <a href="list-agent.php" style="color:#333;text-shadow:none;">List Agent</a> / <a href="detail-agent.php" style="color:#333;text-shadow:none;">Mr. Hanzputro</a></p>
			<!-- #menu -->
            <div id="main-menu">
				<div class="navbar navbar-inverse navbar-static-top">
					<div class="navbar-inner navbar-inner2">
						<div class="container-fluid">				
							<ul class="nav nav2">
								<li><a href="home.php"><i class="icon-home"></i> Properti</a></li>
								<li><a class="active2" href="list-agent.php"><i class="icon-group"></i> Agent Properti</a></li>                            
							</ul>
						</div>
					</div>
				</div>
			</div>
            <!-- /#menu -->
			
			<div class="row-fluid">
				<div class="span12">
					<div class="row-fluid">				
						<div class="span12">
							<div class="row-fluid jrk">
								<div class="span12 bg-agnt-detail-out">
									<div class="row-fluid">
										<!----- image ----->
										<div class="span2 agnt-detail-photo">
											<img src="assets/img/agent-photos.png" alt="" style="width:100px; margin:18px 0px 0px 23px;"/>
										</div>
										<!----- /image ----->
										<!----- Penjelasan Agent ----->
										<div class="span10">
											<div class="row-fluid">
												<div class="span8 desc-name-agnt-spec">
													<h4>Mr. Hanzputro</h4>
													<h5>Independent Property Agent</h5>
												</div>
												<div class="span4">
													<img src="assets/img/agent-logo.png" alt="" style="width:200px; margin:18px 0px 0px 0px; float:right;"/>
												</div>		
											</div>
											<div class="hr3"></div>
											<div class="row-fluid">												
												<div class="span8 desc-dll-agnt-det">
													<!--<h5>Perkenalan</h5>-->
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
														sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</p>
												</div>
												<div class="span4 desc-alamat-agnt-det">
													<script type="text/javascript">
														$(document).ready(function(){
															$('a[href^="#"]').on('click',function (e) {
																e.preventDefault();

																var target = this.hash,
																$target = $(target);

																$('html, body').stop().animate({
																	'scrollTop': $target.offset().top
																}, 700, 'swing', function () {
																	window.location.hash = target;
																});
															});
														});
													</script>
													<a href="#scrollhubagent2" class="btn btn-large btn-success pull-right" style="color:#fff;font-size:23px;font-weight:bold;padding:10px 38px;">HUBUNGI 
														<i class="icon-envelope-alt" style="color:#fff"></i>
													</a>
												</div>	
											</div>
										</div>
										<!----- /Penjelasan Agent ----->
									</div> 
									<div class="row-fluid">
										<div class="span12" style="height:40px;"></div>
									</div> 
								</div>								
							</div>
							
							<!---- Sidebar ---->
							<?php 
								include "component/tab-agent.php";
							?>			
							<!---- /Sidebar ---->
							
							<div class="row-fluid">	
								<!--
								<div class="span12 jrk" style="height:88px; background: #e1e1e1;">
									<div class="iklan"><p>SPACE IKLAN</p></div>
								</div>
								-->
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