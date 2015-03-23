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
		<link type="text/css" rel="stylesheet" href="assets/css/print.css" media="print"/>
		<link type="text/css" rel="stylesheet" href="assets/css/pikachoose/left.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
		<link rel="stylesheet" type="text/css" href="assets/css/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
		<link rel="stylesheet" type="text/css" href="assets/css/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
		
		<!-- JS -->		
		<script type="text/javascript" src="assets/js/vendor/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="assets/js/vendor/bootstrap.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap-paginator.js"></script>
		<script type="text/javascript" src="assets/js/fotorama.js"></script>
		<script type="text/javascript" src="assets/js/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.pikachoose.min.js"></script>
		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="assets/js/maps.js"></script>
		<script type="text/javascript" src="assets/js/jquery.mousewheel-3.0.6.pack.js"></script>
		<script type="text/javascript" src="assets/css/fancybox/jquery.fancybox.js?v=2.1.5"></script>
		<script type="text/javascript" src="assets/css/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script type="text/javascript" src="assets/css/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
		<script type="text/javascript" src="assets/css/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
		
		
		<script type="text/javascript">
			var fancyGallery = []; // fancybox gallery group
			$(document).ready(function () {
				var fancy = function (self) {
					// bind click event to big image
					self.anchor.on("click", function(e){
					// find index of corresponding thumbnail
					var pikaindex = $("#pikame").find("li.active").index();
					// open fancybox gallery starting from corresponding index
					$.fancybox(fancyGallery,{
						// fancybox options
						"cyclic": true, // optional
						"index": pikaindex, // start with the corresponding thumb idex
						prevEffect : 'none',
						nextEffect : 'none',

						closeBtn  : true,
						arrows    : true,
						nextClick : true,

						helpers : {
							thumbs : {
								width  : 50,
								height : 50
							}
						}
					});
					return false;
					}); // on click
				}
				// build fancybox group
				$("#pikame").find("a").each(function(i){
					// buidl fancybox gallery
					fancyGallery[i] = {"href" : this.href, "title" : this.title};
				}).end().PikaChoose({
					autoPlay : false, // optional
					carousel:true, 
					carouselVertical:true,
					// bind fancybox to big images elements after pikachoose is built
					buildFinished: fancy
				});
			});
		</script>
    </head>
	
    
    <body class="">
		
		<div id="nav-body" class="no-print"><!---- Header ---->
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
		<div id="logo-body" class="">
			<div id="logo-wrap">
				<div class="row-fluid">
					<div class="span3">
						<a href="home.php"><div class="logo-properti1001"></div></a>
					</div>
					<div class="span7 offset2">
						<div class="iklan"><p>SPACE IKLAN</p></div>
					</div>
				</div>			
			</div>	
		</div>
		<div id="line-orange"></div><!---- /Header ---->
		
		
        <div id="wrap" style="background:#fff;"><!---- Content ---->			
			<!-- #menu -->
            <div id="main-menu" class="no-print" style="margin: -42px 0px 3px 0px;">
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
            <!-- /#menu -->
			
			<div class="row-fluid box-print">
				<div class="span12 box-jdl-detail">
				<div class="link-navigation-web-out">
					<p class="link-navigation-web" style="border-bottom:4px solid #0179b5;"><a href="../home.php">Home</a> / <a href="apartemen.php">Jual Apartemen</a> / <a href="#">
						Rumah Tua Di Kebon Kacang Dijual...HITUNG TANAH SAJA... TERMURAH !!! PALING MURAH !!!</a>
					</p>
				</div>
					<div class="row-fluid">				
						<div class="span9">
							<div class="row-fluid">				
								<div class="span12" style="margin-top:0px;">
									<div class="row-fluid">
										<!-- Icon Dijual, Disewa, Terjual, Tersewa -->
										
										<div class="span1 bg-sellrent-list" style="width:46px;">
											<font style="background:#ffa200;padding:0px 5px;">Dijual</font>
											<center><div class="jual-icon-list"></div></center>
										</div>
										<!--
										<div class="span1 bg-sellrent-list" style="width:46px;">
											<font style="background:#ffa200;padding:0px 3px;">Disewa</font>
											<center><div class="sewa-icon-list"></div></center>
										</div>
										<div class="span1 bg-telahsr-list" style="width:46px;">
											<font style="background:#fff;padding:0px 4px;color:#777;">Terjual</font>
											<center><i class="icon-ok" style="color:white;font-size:18px;"></i></center>
										</div>										
										<div class="span1 bg-telahsr-list" style="width:46px;">
											<font style="background:#fff;padding:0px 1px;color:#777;">Tersewa</font>
											<center><i class="icon-ok" style="color:white;font-size:18px;"></i></center>
										</div>
										<!-- /Icon Dijual, Disewa, Terjual, Tersewa -->
										<div class="span10 span12-title-detail">
											<p>Rumah Tua Di Kebon Kacang Dijual...HITUNG TANAH SAJA... TERMURAH !!! PALING MURAH !!!</p>
										</div>
									</div>
									<div class="row-fluid">				
										<div class="span6 span4-desc-detail">
											<p class="price-detail">IDR 500.000.000 <font>(Nego)</font></p>
											<p class="loc-detail">Duta Bumi, Bekasi, Jawa Barat</p>											
										</div>
										<div class="span6">	
											<div class="row-fluid pcrn-wrap2 jrk no-print">					
												<div class="span12 icn-detail">
													<a class="btn btn-mini pull-right" href="https://www.facebook.com/sharer/sharer.php?u=example.org" onclick="javascript:window.open(this.href,
				  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="icon-facebook-sign" style="color:#012fb2;"></i> Facebook</a>	
													<a class="btn btn-mini pull-right" href="https://twitter.com/share?url=https%3A%2F%2Fdev.twitter.com%2Fpages%2Ftweet-button" onclick="javascript:window.open(this.href,
				  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="icon-twitter-sign" style="color:#03a0ef;"></i> Twitter</a>
													<a class="btn btn-mini pull-right" href="https://plus.google.com/share?url={http://www.google.com}" onclick="javascript:window.open(this.href,
				  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="icon-google-plus-sign" style="color:#dd4c39;"></i> G+</a>
													<!--<font href="" class="pull-right" style="color:#e1e1e1; margin:0px 2px;">|</font><div class="" style="clear:both;"></div>-->													
													<a href="javascript:window.print()" class="btn btn-mini pull-right"><i class="icon-print" style="color:#f07701;"></i> Print</a>	
													<a href="" class="btn btn-mini pull-right"><i class="icon-plus-sign" style="color:#f07701;"></i> Simpan Listing</a>
												</div>
											</div>
											<!--
											<div class="pull-right desc-icon-print">
												<font class="desc-icon-list" style="border-right:1px solid #f1f1f1; padding:0px 5px 0px 0px;">3<img src="assets/img/bed.png" Title="3 Kamar Tidur" style="width:45px;"/></font>
												<font class="desc-icon-list" style="border-right:1px solid #f1f1f1; padding:0px 5px 0px 5px;">1<img src="assets/img/shower.png" Title="1 Kamar Mandi" style="width:45px;"/></font>
												<font class="desc-icon-list" style="border-right:1px solid #f1f1f1; padding:0px 5px 0px 5px;">1<img src="assets/img/garage.png" Title="1 Garasi" style="width:45px;"/></font>
												<font class="desc-icon-list" style="padding:0px 5px 0px 5px;">300<img src="assets/img/m2.png" Title="Luas Tanah 300 m2" style="width:45px;"/></font>	
											</div>
											-->
										</div>
									</div>									
								</div>
							</div>
							
							<!---- tab-photo-denah-video-map ---->
							<?php 
								include "component/tab-img-dnh-vd-map.php";
							?>			
							<!---- /tab-photo-denah-video-map ---->
							
							<!---- detail-desc-properti ---->
							<?php 
								include "component/detail-desc-properti.php";
							?>			
							<!---- /detail-desc-properti ---->
							
							<!---- detail-desc-properti ---->
							<?php 
								include "component/hubungi-agent.php";
							?>			
							<!---- /detail-desc-properti ---->
							
							<!---- Space iklan ---->
							<div class="row-fluid">				
								<div class="span12 jrk" style="height:88px; background: #e1e1e1;">
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