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
						<a href="../home.php"><div class="logo-properti1001"></div></a>
					</div>
					<div class="span7 offset2" >
						<div class="iklan"><p>SPACE IKLAN</p></div>
					</div>
				</div>			
			</div>	
		</div>
		<div id="line-orange"></div><!---- /Header ---->
		
		
        <div id="wrap"><!---- Content ---->
			<p class="link-navigation-web"><a href="home.php" style="color:#333;">Home</a> / <a href="list-agent.php" style="color:#333;">List Agent</a></p>
			<!-- #menu -->
            <div id="main-menu">
				<div class="navbar navbar-inverse navbar-static-top">
					<div class="navbar-inner navbar-inner2">
						<div class="container-fluid">				
							<ul class="nav nav2">
								<li><a href="home.php"><i class="icon-home"></i> Properti</a></li>
								<li><a class="active2" href="list-agent.php"><i class="icon-group"></i> Agent Properti</a></li>                             
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
			
			<div class="row-fluid">
				<div class="span12">
					<div class="row-fluid">				
						<div class="span9">
							<div class="row-fluid jrk">
								<div class="span12 img-srcbox">
									<div class="row-fluid">
										<!----- image ----->
										<div class="span6 img-bg-list">
											<p class="p-title-img-list" style="margin-top:70px;">LIST <font class="">AGENT</font></p>
											<p class="p2-desc-img-list" style="margin-top:120px;">Properti1001 memiliki banyak Agent properti di Lokasi Sekitar Anda.</p>
											<img src="assets/img/bg-prop/agent.jpg" alt="" style="height:170px; width:100%; border-radius:4px 0px 0px 4px;"/>
										</div>
										<!----- /image ----->
										
										<!----- Searchbox ----->
										<div class="span6 searchbox-list">
														<form class=""><!----- form ----->
															<div class="control-group">
																<div class="row-fluid">
																	<div class="span12">
																		<div class="controls" style="margin-top:3px;">
																			<label style="color:#fff; font-weight:bold; float:left; font-size:14px; text-shadow: 0 2px 1px #000;">
																				<input class="uniform" style="margin-top:-2px;" name="optionsRadios" type="radio" value="option1" checked> 
																				Cari Agent
																			</label>
																			<label style="color:#fff; font-weight:bold;float:left; font-size:14px; padding:0px 10px 0px 10px; text-shadow: 0 2px 1px #000;">
																				<input class="uniform" style="margin-top:-2px;" name="optionsRadios" type="radio" value="option2"> 
																				Cari Kantor Agent
																			</label>
																		</div>
																	</div>
																</div>
																<div class="row-fluid">
																	<div class="span6">
																		<div class="controls">
																			<select data-placeholder="" class="span12 select-mini select2" tabindex="2">
																				<option selected>Semua Provinsi</option>
																				<option>Jawa Barat</option>
																				<option>Jawa Timur</option>
																				<option disabled>Sumatra</option>
																				<option disabled>Sulawesi</option>
																			</select>
																		</div>
																	</div>
																	<div class="span6">
																		<div class="controls">
																			<select data-placeholder="" class="span12 select-mini select2" tabindex="3">
																				<option selected>Semua Kota</option>
																				<option>Jakarta</option>
																				<option>Bekasi</option>
																				<option disabled>Bogor</option>
																				<option disabled>Depok</option>
																			</select>
																		</div>
																	</div>	
																</div>
																<div class="controls">
																	<input class="span12" type="text" id="text2" style="font-size:14px;" placeholder="ex: &quot;Nama Agent&quot; / Huruf Depan Agent &quot;A&quot;"/>
																</div>
																<div class="row-fluid">
																	<div class="span12">
																		<div class="controls">
																			<button class="btn btn-warning btn-warning-large2" type="button" style="font-size:14px;"><i class="icon-search"></i> Cari Agent</button>
																		</div>
																	</div>
																</div>
															</div>
														</form><!----- /form ----->														
										</div>
										<!----- /Searchbox ----->									
									</div>  
								</div>
							</div>
							
							<div class="row-fluid jrk">	
								<div class="span12">
									<div class="tabbable tab-contprop2">
										<!----- Urut berdasarkan ----->
										<ul class="nav nav-tabs smpn-pcrn">											
											<div class="controls-search controls-search2">
												<font class="pull-left" style="margin:5px 5px 0px 0px; color:#fff; font-size:14px;">Urut Berdasarkan: </font>
												<select data-placeholder="" class="span4 select2" tabindex="9">
													<option selected>A s/d Z</option>
													<option>Z s/d A</option>
													<option>Listing Terbanyak</option>
												</select>
												<select data-placeholder="" class="span2 select2 pull-right" tabindex="10" style="width:55px;">
													<option selected>10</option>
													<option>20</option>
													<option>30</option>
												</select>
												<font class="pull-right" style="margin:5px 5px 0px 5px; color:#fff; font-size:14px;">Tampilan Per Halaman: </font>
											</div>
											<div class="" style="clear:both;"></div>
											<div class="controls-search">
												<font class="pull-right" style="margin:5px 5px 10px 5px; color:#03a0ef; font-size:20px; letter-spacing:0px;">
													<font style="font-weight:bold; letter-spacing:0px;">720 Agent</font> Ditemukan
												</font>
												<!--<a class="pull-right">Simpan Pencarian <i class="icon-plus-sign"></i></a>-->
											</div>											
										</ul>
										<!----- /Urut berdasarkan ----->
										
										<div class="tab-content tab-content-bg">												
											<div class="row-fluid"> 
													
													<!---- list-view ---->
													<div class="row-fluid"> 												
														<div class="span12 view-list">
															<div class="row-fluid">
																<div class="span12 view-list-in">
																	<div class="row-fluid">
																		<div class="span2 list-agnt-bg">
																			<a href="#"><img src="assets/img/agent-photos.png" alt="" style="width:100%;"/></a>
																		</div>
																		
																		<div class="span7 list-agnt-desc">
																			<a href="detail-agent.php"><h4>Mr. Hanzputro</h4></a>
																			<p>Spesialis Area: Jakarta Timur, Bekasi, Tambun.</p>
																			<p>Telp 1: +62 0876452233</p>
																			<p>Telp 2: +62 0876452233</p>
																			<p>Pin BB: BBC34ED</p>
																			<p>Email: Hanzputro@gmail.com</p>
																			<p>Total Listing: 23</p>
																		</div>
																		<div class="span3 list-agnt-perushn">
																			<a href="#"><img src="assets/img/agent-logo.png" alt="" style="width:100%;"/></a>
																			<a href="#"><h5>Perusahaan Agent Properti</h5></a>
																			<!--
																			<p>Alinda Kencana Blok F2 no 30</p>
																			<p>kota, Provinsi</p>
																			-->
																		</div>																		
																	</div>
																</div>
																<div class="row-fluid">
																	<div class="span12 bg-detail-list">
																	<p class="pull-left">Bergabung Sejak: 12/12/2012</p>
																	<a href="detail-agent.php" class="pull-right"><i class="icon-credit-card"></i> Lihat Detail Agent</a>
																	<a href="register.html" class="pull-right"><i class="icon-envelope-alt"></i> Hubungi Agent</a>
																	</div>
																</div>
															</div>														
														</div>
													</div> 
													<!---- /list-view ---->			
													
													<!---- list-view ---->
													<div class="row-fluid"> 												
														<div class="span12 view-list">
															<div class="row-fluid">
																<div class="span12 view-list-in">
																	<div class="row-fluid">
																		<div class="span2 list-agnt-bg">
																			<a href="#"><img src="assets/img/agent-photos.png" alt="" style="width:100%;"/></a>
																		</div>
																		
																		<div class="span7 list-agnt-desc">
																			<a href="detail-agent.php"><h4>Mr. Hanzputro</h4></a>
																			<p>Spesialis Area: Jakarta Timur, Bekasi, Tambun.</p>
																			<p>Phone: +62 0876452233</p>
																			<p>Pin BB: BBC34ED</p>
																			<p>Email: Hanzputro@gmail.com</p>
																			<p>Total Listing: 23</p>
																		</div>
																		<div class="span3 list-agnt-perushn">
																			<a href="#"><img src="assets/img/agent-logo.png" alt="" style="width:100%;"/></a>
																			<a href="#"><h5>Perusahaan Agent Properti</h5></a>
																			<!--
																			<p>Alinda Kencana Blok F2 no 30</p>
																			<p>kota, Provinsi</p>
																			-->
																		</div>																		
																	</div>
																</div>
																<div class="row-fluid">
																	<div class="span12 bg-detail-list">
																	<p class="pull-left">Bergabung Sejak: 12/12/2012</p>
																	<a href="detail-agent.php" class="pull-right"><i class="icon-credit-card"></i> Lihat Detail Agent</a>
																	<a href="register.html" class="pull-right"><i class="icon-envelope-alt"></i> Hubungi Agent</a>
																	</div>
																</div>
															</div>														
														</div>
													</div> 
													<!---- /list-view ---->					
											</div> 
										</div>
										<div class="pagination-1001-out">
											<div id="pagination-1001" class="pagination-1001"></div> <!---- pagination ---->
											<script type='text/javascript'>
												var options = {
													currentPage: 3,
													totalPages: 10,
													size:'small',
													alignment:'right',
													tooltipTitles: function (type, page, current) {
														switch (type) {
														case "first":
															return "Terawal";
														case "prev":
															return "Sebelumnya";
														case "next":
															return "Selanjutnya";
														case "last":
															return "Terakhir";
														case "page":
															return "Halaman " + page;
														}
													}
												}
												$('#pagination-1001').bootstrapPaginator(options);
											</script> <!---- /pagination ---->
										</div>
									</div>								
								</div>
							</div>
							
							<div class="row-fluid">				
								<div class="span12 jrk">
									<div class="iklan"><p>SPACE IKLAN</p></div>
								</div>
							</div>
						</div>
						
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