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
		
		<script type="text/javascript">
			var $ = jQuery.noConflict();
			
			//news slider
			$(document).ready(function(){
				$("#featured").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
				$("#featured").hover(
					function() {
					$("#featured").tabs("rotate",0,true);
					},
					function() {
					$("#featured").tabs("rotate",5000,true);
					}
				);
			});
			
			//premium listing jual slider
			$(document).ready(function(){
				$('.sliderjual').bxSlider({
					slideWidth: 228,
					minSlides: 2,
					maxSlides: 3,
					slideMargin: 10,
					pager: false,
					auto: true,
					stopAuto: false,
					autoHover: true,
					nextSelector: '#slider-nextjual',
					prevSelector: '#slider-prevjual',
					nextText: '<i class="icon-circle-arrow-right" style="font-size:18px;"></i>',
					prevText: '<i class="icon-circle-arrow-left" style="font-size:18px;"></i>'
					
				});
			});
			
			//premium listing sewa slider
			$(document).ready(function(){
				$('.slidersewa').bxSlider({
					slideWidth: 228,
					minSlides: 2,
					maxSlides: 3,
					slideMargin: 10,
					pager: false,
					auto: true,
					stopAuto: false,
					autoHover: true,
					nextSelector: '#slider-nextsewa',
					prevSelector: '#slider-prevsewa',
					nextText: '<i class="icon-circle-arrow-right" style="font-size:18px;"></i>',
					prevText: '<i class="icon-circle-arrow-left" style="font-size:18px;"></i>'
					
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
		
        <div id="wrap"><!---- Content ---->
			<!--<p class="link-navigation-web">Home &raquo;</p>
			<!---- menu ---->
            <div id="main-menu2">
				<div class="navbar navbar-inverse navbar-static-top">
					<div class="navbar-inner navbar-inner2">
						<div class="container-fluid">				
							<ul class="nav nav2">
								<li><a class="active2" href="home.php"><i class="icon-home"></i> Properti</a></li>
								<li><a href="list-agent.php"><i class="icon-group"></i> Agent Properti</a></li> 
							</ul>
							<ul class="nav nav3 pull-right">
								<li>
									<a href="daftar-akun.php"><div class="papan-iklan"></div></a>
								</li>                                 
							</ul>
						</div>
					</div>
				</div>
			</div>
            <!---- /menu ---->
			
			<!---- properti-link ---->
			<?php 
				include "component/properti-link.php";
			?>			
			<!---- /properti-link ---->
			
			<!---- properti-search ---->
			<?php 
				//include "component/properti-search.php";
			?>			
			<!---- /properti-search ---->
			
			<div class="row-fluid">
				<div class="span12"><!----- span12 ----->
					<div class="row-fluid">					
						<div class="span9">
							
							<!---- homepremiumlistingjual-slider ---->
							<?php 
								include "component/homepremiumlistingjual-slider.php";
							?>	
							<!---- /homepremiumlistingjual-slider ---->
							
							<!---- homepremiumlistingjual-slider ---->
							<?php 
								include "component/homepremiumlistingsewa-slider.php";
							?>	
							<!---- /homepremiumlistingjual-slider ---->
							
							<!---- featured-post-slider ---->
							<?php 
								include "component/featured-post-slider.php";
							?>			
							<!---- /featured-post-slider ---->
							
							<!---- properti-terbaru ---->
							<?php 
								include "component/properti-terbaru.php";
							?>			
							<!---- /properti-terbaru ---->
							
							<!---- lokasi-properti ---->
							<?php 
								include "component/lokasi-properti.php";
							?>			
							<!---- /lokasi-properti ---->
						
							<!---- Space iklan ---->
							<div class="row-fluid">				
								<div class="span12 jrk">
									<div class="iklan"><p>SPACE IKLAN</p></div>
								</div>
							</div>
							<!---- /Space iklan ---->							
						</div><!---- /span9 out ---->
						
						
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