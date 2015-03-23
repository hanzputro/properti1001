<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="../../../assets/css/bootstrap.css"/>
        <!--<link type="text/css" rel="stylesheet" href="../../../assets/css/bootstrap-responsive.css"/>-->
        <link type="text/css" rel="stylesheet" href="../../../assets/css/font-awesome.min.css"/>
        <link type="text/css" rel="stylesheet" href="../../../assets/css/style.css"/>
		<link type="text/css" rel="stylesheet" href="../../../assets/css/jasny-bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="../../../assets/css/uniform.default.css"/>
		
		<!-- JS -->		
		<script type="text/javascript" src="../../../assets/js/vendor/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="../../../assets/js/vendor/bootstrap.js"></script>
		<script type="text/javascript" src="../../../assets/js/jasny-bootstrap.min.js"></script>
		<script type="text/javascript" src="../../../assets/js/jquery.uniform.min.js"></script>
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
										<li><a href="#">CREDITS <span class="label label-warning" style="margin-left:2px;">1000</span></a></li>
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
					<div class="span7 offset2">
						<div class="iklan"><p>SPACE IKLAN</p></div>
					</div>
				</div>			
			</div>	
		</div>
		<div id="line-orange"></div><!---- /Header ---->
		
		<!---- Content ---->
        <div id="wrap" style="">
			<p class="link-navigation-web"><a href="../../../home.php">Home</a> / <a href="../newpost-listing.php">Post New Listing</a> / <a href="detail-posting.php">Details Posting</a></p>
			<!-- #menu -->
            <div id="main-menu">
				<div class="navbar navbar-inverse navbar-static-top">
					<div class="navbar-inner navbar-inner2">
						<div class="container-fluid">				
							<ul class="nav nav2">
								<li><a class="" href="../../../home.php"><i class="icon-home"></i> Properti</a></li>
								<li><a href="../../../list-agent.php"><i class="icon-group"></i> Agent Properti</a></li>                                
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
													<a class="" href="javascript:void(0)"><i class="icon-briefcase"></i> AGENT ACCOUNT </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="../my-account.php">Dashboard <i class="icon-coffee pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="../my-credit.php">My Credits <i class="icon-money pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="../change-pass.php">Change Password <i class="icon-exchange pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
												</li>
												<li>
													<a class="" href="javascript:void(0)"><i class="icon-user-md"></i> PROFILE </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="../view-profile.php">View Profile <i class="icon-eye-open pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="../edit-profile.php">Edit Profile <i class="icon-wrench pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
												</li>
												<li>
													<a class="" href="../packages-listing.php"><i class="icon-folder-open-alt"></i> PACKAGE </a>
													<!--
													<ul class="dropdown-nav5">
														<li><a class="pull-left" href="packages-listing.php">Packages <i class="icon-hdd pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="expired-listing.php">Expired Listing <i class="icon-ban-circle pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
													-->
												</li>
												<li>
													<a class="active5" href="javascript:void(0)"><i class="icon-folder-open-alt"></i> LISTING </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="../my-listing.php">My Listing <i class="icon-folder-open-alt pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="../newpost-listing.php">Post New Listing <i class="icon-certificate pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="../expired-listing.php">Expired Listing <i class="icon-ban-circle pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
												</li>
												<li>
													<a class="" href="javascript:void(0)"><i class="icon-magic"></i> TOOLS </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="../properti-pilihan.php">favorite properties <i class="icon-heart-empty pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="../inbox.php">Inbox <i class="icon-comment pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="../inbox.php">CS &amp; Agent / Personal <i class="icon-comments pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
												</li>
											</ul>
											<div style="clear:both;"></div>
										</div>										
										<div class="div-mycredits pull-right">
											<p>Saldo Credits : <font class="view-credits"> 100.000.000.000</font></p>											
											<p>Saldo Premium : <font class="view-credits"> 199.999.999.999</font></p>
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
						<div class="span12 tab-accountl tab-acc jrk">
							<div class="row-fluid">
								<div class="span12 main-account-menu-acc">
									<div id="">
										<div class="navbar navbar-inverse navbar-static-top">
											<div class="navbar-inner navbar-inner2">
												<div class="container-fluid">
													<ul class="nav nav-track" style="padding-left:10%;">														
														<hr style="position:absolute; border:1px dotted #d5d5d5; margin:21px 0px 0px 130px; width:60%; z-index:1;">
														<li><a class="" href="../newpost-listing.php"><div class="circle-untrack"><p><i class="icon-hdd"></i></p></div><br>1. Choose Packages</a></li>
														<li><a class="active-track" href="javascript:void(0)" style="cursor:default; color:#aaa; background:#fff;"><div class="circle-track"><p><i class="icon-facetime-video"></i></p></div><br>2. Details Posting</a></li>
														<li><a class="" href="javascript:void(0)" style="cursor:default; color:#aaa; background:#fff;"><div class="circle-untrack"><p><i class="icon-ok"></i></p></div><br>3. Done</a></li>														
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<hr style="margin:3px 0px 15px 0px">
							<h3>Detail Posting</h3>
							<p><i>Silahkan lengkapi form berikut untuk kelengkapan informasi properti.</i></p>					
							<!----- /form detail-properti ----->
							<form id="" class="" action="done-posting.php">
								<div class="bg-title-post">
									<h5 style="">Informasi Penjualan</h5>
								</div>
								
								<!-- JS Hide/Show Jangka Waktu Sewa -->
								<script type="text/javascript">
									$(document).ready(function() {
										document.getElementById('jualsewar2').onchange = function() {
											document.getElementById('jws-hs').style.display = this.checked ? 'block' : 'none';
										};
										document.getElementById('jualsewar1').onchange = function() {
											document.getElementById('jws-hs').style.display = this.checked ? 'none' : 'block';
										};
									});
								</script>
								<!-- /JS Hide/Show Jangka Waktu Sewa -->
								
								<div class="bg-form-post">
									<label style="font-size:16px;font-weight:bold;color:#777;float:left;">
										<input class="uniform" id="jualsewar1" name="jualsewar" style="margin-top:-2px;" type="radio" value="jualsewar1"> Jual
									</label>
									<label style="font-size:16px;font-weight:bold;color:#777; float:left; margin-left:30px;">
										<input class="uniform" id="jualsewar2" name="jualsewar" style="margin-top:-2px;" type="radio" value="jualsewar2"> Sewa
									</label>
									<div class=""style="clear:both;"></div>
									<div class="row-fluid">
										<div class="span6">
											<div class="control-group" style="margin:0px;">
												<label class="control-label" style="font-size:12px;color:#555;">Tipe Properti <font style="color:#03a0ef;">*</font></label>
												<select data-placeholder="" class="span12 select2" tabindex="9">
													<option selected>Rumah</option>
													<option>Ruko</option>
													<option>Apartemen</option>
													<option>Tanah</option>
													<option>Gudang</option>
													<option>Kantor</option>
													<option>Gedung</option>
												</select>
											</div>
										</div>
										<div class="span6">
											<div class="control-group" style="margin:0px;">
												<label class="control-label" style="font-size:12px;color:#555;">Harga <font style="color:#03a0ef;">*</font></label>
												<div class="controls bg-input-text">
													<input type="text" id="username" name="username" class="span12">
												</div>
											</div>
										</div>
										<div class="row-fluid" id="jws-hs">
											<div class="span12">
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Jangka Waktu Sewa <font style="color:#03a0ef;">*</font></label>
													<div class="controls bg-input-text">
														<label style="font-size:16px;font-weight:bold;color:#777;float:left;">
															<input class="uniform" name="jws" style="margin-top:-2px;" type="radio" value="jws1"> Harian
														</label>
														<label style="font-size:16px;font-weight:bold;color:#777; float:left; margin-left:30px;">
															<input class="uniform" name="jws" style="margin-top:-2px;" type="radio" value="jws2"> Mingguan
														</label>
														<label style="font-size:16px;font-weight:bold;color:#777; float:left; margin-left:30px;">
															<input class="uniform" name="jws" style="margin-top:-2px;" type="radio" value="jws3"> Bulanan
														</label>
														<label style="font-size:16px;font-weight:bold;color:#777; float:left; margin-left:30px;">
															<input class="uniform" name="jws" style="margin-top:-2px;" type="radio" value="jws4"> Tahunan
														</label>
														<label style="font-size:16px;font-weight:bold;color:#777; float:left; margin-left:30px;">
															<input class="uniform" name="jws" style="margin-top:-2px;" type="radio" value="jws5"> Lainnya
														</label>
														<div class=""style="clear:both;"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="row-fluid">
											<div class="span12">
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Title Properti <font style="color:#03a0ef;">*</font></label>
													<div class="controls bg-input-text">
														<input type="text" id="username" name="username" class="span12">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="bg-title-post">
									<h5 style="">Detail Properti</h5>
								</div>
								<div class="bg-form-post">								
									<div class="row-fluid">
										<div class="span12">
											<div class="control-group" style="margin:0px;">
												<label class="control-label" style="font-size:12px;color:#555;">Alamat Properti <font style="color:#03a0ef;">*</font></label>
												<div class="controls bg-input-text">
													<input type="text" id="username" name="username" class="span12">
												</div>
											</div>
										</div>									
										
										<div class="row-fluid">
											<div class="span6">
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Provinsi <font style="color:#03a0ef;">*</font></label>
													<select data-placeholder="" class="span12 select2" tabindex="9">
														<option selected>Rumah</option>
														<option>Ruko</option>
														<option>Apartemen</option>
														<option>Tanah</option>
														<option>Gudang</option>
														<option>Kantor</option>
														<option>Gedung</option>
													</select>
												</div>
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Kota <font style="color:#03a0ef;">*</font></label>
													<select data-placeholder="" class="span12 select2" tabindex="9">
														<option selected>Rumah</option>
														<option>Ruko</option>
														<option>Apartemen</option>
														<option>Tanah</option>
														<option>Gudang</option>
														<option>Kantor</option>
														<option>Gedung</option>
													</select>
												</div>
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Kondisi Rumah <font style="color:#03a0ef;">*</font></label>
													<select data-placeholder="" class="span12 select2" tabindex="9">
														<option selected>Rumah</option>
														<option>Ruko</option>
														<option>Apartemen</option>
														<option>Tanah</option>
														<option>Gudang</option>
														<option>Kantor</option>
														<option>Gedung</option>
													</select>
												</div>
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Sertifikat <font style="color:#03a0ef;">*</font></label>
													<select data-placeholder="" class="span12 select2" tabindex="9">
														<option selected>Rumah</option>
														<option>Ruko</option>
														<option>Apartemen</option>
														<option>Tanah</option>
														<option>Gudang</option>
														<option>Kantor</option>
														<option>Gedung</option>
													</select>
												</div>
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Tahun Dibangun <font style="color:#03a0ef;">*</font></label>
													<select data-placeholder="" class="span12 select2" tabindex="9">
														<option selected>Rumah</option>
														<option>Ruko</option>
														<option>Apartemen</option>
														<option>Tanah</option>
														<option>Gudang</option>
														<option>Kantor</option>
														<option>Gedung</option>
													</select>
												</div>
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Tahun Renovasi <font style="color:#03a0ef;">*</font></label>
													<select data-placeholder="" class="span12 select2" tabindex="9">
														<option selected>Rumah</option>
														<option>Ruko</option>
														<option>Apartemen</option>
														<option>Tanah</option>
														<option>Gudang</option>
														<option>Kantor</option>
														<option>Gedung</option>
													</select>
												</div>
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Kondisi Perabot <font style="color:#03a0ef;">*</font></label>
													<select data-placeholder="" class="span12 select2" tabindex="9">
														<option selected>Rumah</option>
														<option>Ruko</option>
														<option>Apartemen</option>
														<option>Tanah</option>
														<option>Gudang</option>
														<option>Kantor</option>
														<option>Gedung</option>
													</select>
												</div>
											</div>										
											
											<div class="span6">
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Banyak Tingkat Rumah <font style="color:#03a0ef;">*</font></label>
													<select data-placeholder="" class="span12 select2" tabindex="9">
														<option selected>Rumah</option>
														<option>Ruko</option>
														<option>Apartemen</option>
														<option>Tanah</option>
														<option>Gudang</option>
														<option>Kantor</option>
														<option>Gedung</option>
													</select>
												</div>											
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Arah Menghadap <font style="color:#03a0ef;">*</font></label>
													<select data-placeholder="" class="span12 select2" tabindex="9">
														<option selected>Rumah</option>
														<option>Ruko</option>
														<option>Apartemen</option>
														<option>Tanah</option>
														<option>Gudang</option>
														<option>Kantor</option>
														<option>Gedung</option>
													</select>
												</div>
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Lebar Jalan <font style="color:#03a0ef;">*</font></label>
													<select data-placeholder="" class="span12 select2" tabindex="9">
														<option selected>Rumah</option>
														<option>Ruko</option>
														<option>Apartemen</option>
														<option>Tanah</option>
														<option>Gudang</option>
														<option>Kantor</option>
														<option>Gedung</option>
													</select>
												</div>
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Kamar Pembantu <font style="color:#03a0ef;">*</font></label>
													<select data-placeholder="" class="span12 select2" tabindex="9">
														<option selected>Rumah</option>
														<option>Ruko</option>
														<option>Apartemen</option>
														<option>Tanah</option>
														<option>Gudang</option>
														<option>Kantor</option>
														<option>Gedung</option>
													</select>
												</div>
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Garasi <font style="color:#03a0ef;">*</font></label>
													<select data-placeholder="" class="span12 select2" tabindex="9">
														<option selected>Rumah</option>
														<option>Ruko</option>
														<option>Apartemen</option>
														<option>Tanah</option>
														<option>Gudang</option>
														<option>Kantor</option>
														<option>Gedung</option>
													</select>
												</div>
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Luas Bangunan <font style="color:#03a0ef;">*</font></label>
													<div class="controls bg-input-text">
														<input type="text" id="username" name="username" class="span12">
													</div>
												</div>
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Luas Tanah <font style="color:#03a0ef;">*</font></label>
													<div class="controls bg-input-text">
														<input type="text" id="username" name="username" class="span12">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="bg-title-post">
									<h5 style="">Fasilitas Properti</h5>
								</div>
								<div class="bg-form-post">
									<div class="row-fluid">
										<div class="span4">
											<label style="font-size:12px; color:#555;">
												<input class="uniform" style="margin-top:-2px;margin-right:5px;" type="checkbox" value="option1"> Baru Renovasi
											</label>
											<label style="font-size:12px; color:#555;">
												<input class="uniform" style="margin-top:-2px;margin-right:5px;" type="checkbox" value="option1"> Rumah Baru
											</label>
											<label style="font-size:12px; color:#555;">
												<input class="uniform" style="margin-top:-2px;margin-right:5px;" type="checkbox" value="option1"> BU (Butuh Uang)
											</label>
										</div>
										<div class="span4">
											<label style="font-size:12px; color:#555;">
												<input class="uniform" style="margin-top:-2px;margin-right:5px;" type="checkbox" value="option1"> Daerah Komplek
											</label>
											<label style="font-size:12px; color:#555;">
												<input class="uniform" style="margin-top:-2px;margin-right:5px;" type="checkbox" value="option1"> Cahaya Masuk Rumah
											</label>
											<label style="font-size:12px; color:#555;">
												<input class="uniform" style="margin-top:-2px;margin-right:5px;" type="checkbox" value="option1"> Ada Garasi
											</label>
										</div>
										<div class="span4">
											<label style="font-size:12px; color:#555;">
												<input class="uniform" style="margin-top:-2px;margin-right:5px;" type="checkbox" value="option1"> Ada Kamar Pembantu
											</label>
											<label style="font-size:12px; color:#555;">
												<input class="uniform" style="margin-top:-2px;margin-right:5px;" type="checkbox" value="option1"> Fully Furnished
											</label>
										</div>
									</div>
								</div>
								
								<div class="bg-title-post">
									<h5 style="">Deskripsi Properti</h5>
								</div>
								<div class="bg-form-post">
									<div class="row-fluid">
										<div class="span12">
											<div class="control-group" style="margin:0px;">
												<label class="control-label" style="font-size:12px;color:#555;">Penjelasan Tambahan<font style="color:#03a0ef;">*</font></label>
												<div class="controls bg-input-text">
													<textarea type="textarea" id="username" name="username" class="span12"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="bg-title-post">
									<h5 style="">Media Properti</h5>
								</div>
								<div class="bg-form-post">
									<div class="row-fluid">
										<div class="span12">
											<div class="row-fluid">
												<div class="span6">
													<div class="control-group" style="margin:0px;">
														<label class="control-label" style="font-size:12px;color:#555;">Image Properti <font style="color:#03a0ef;">*</font></label>
														<div class="controls">
															<div class="fileupload fileupload-new" data-provides="fileupload">
																<div class="fileupload-new thumbnail" style="width:94%;height:150px;background:#f1f1f1;border:5px solid #fff;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>
																<div class="fileupload-preview fileupload-exists thumbnail" style="line-height: 20px;"></div>
																<div class="" style="clear:both;"></div>
																<label class="control-label" style="font-size:14px;color:#555;float:left;margin:5px 5px 0px 0px;">Utama : </label>
																<div class="controls">
																	<input type="file"/>
																</div>
																<div class="" style="clear:both;"></div>
															</div>
														</div>
													</div>
													<div class="control-group" style="margin:0px;">
														<label class="control-label" style="font-size:14px;color:#555;float:left;margin:5px 5px 0px 0px;">Berapa banyak image yang ingin di upload :</label>
														<div class="control-group" style="margin:0px;">
															<select data-placeholder="" class="span2 select2" tabindex="8">
																<option>0</option>
																<option>1</option>
																<option selected>2</option>
																<option>3</option>
																<option>4</option>
																<option>5</option>
																<option>6</option>
																<option>7</option>
																<option>8</option>
															</select>														
														</div>
														<div class="" style="clear:both;"></div>
													</div>												
													<div class="control-group">
														<label class="control-label" style="font-size:14px;color:#555;float:left;margin:5px 5px 0px 0px;">Image 1 : </label>
														<div class="controls">
															<input type="file"/>
														</div>
														<div class="" style="clear:both;"></div>
													</div>
													<div class="control-group">
														<label class="control-label" style="font-size:14px;color:#555;float:left;margin:5px 5px 0px 0px;">Image 2 : </label>
														<div class="controls">
															<input type="file"/>
														</div>
														<div class="" style="clear:both;"></div>
													</div>													
												</div>
												
												<div class="span6">
													<div class="control-group">
														<label class="control-label" style="font-size:12px;color:#555;">Video Properti</label>
														<div class="controls">
															<div class="fileupload fileupload-new" data-provides="fileupload">
																<div class="input-append">
																	<div class="uneditable-input span3">
																		<i class="icon-file fileupload-exists"></i>
																		<span class="fileupload-preview"></span>
																	</div>
																	<span class="btn btn-file">
																		<span class="fileupload-new">Select file</span>
																		<span class="fileupload-exists">Change</span>
																		<input type="file" />
																	</span>
																	<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>											
										</div>
									</div>			
								</div>
								
								<div class="bg-title-post">
									<label class="control-label pull-left" style="font-size:12px;color:#555;margin:8px 0px 0px 0px;">Tanda<font style="color:#03a0ef;"> * </font>Wajib diisi</label>
									<input type="submit" value="BUAT LISTING" class="btn btn-primary pull-right" style="padding:7px 22px;margin:12px 0px 12px 0px;font-size:16px;font-weight:bold;">
									<div class="" style="clear:both;"></div>
								</div>
								
							</form>
							<!----- /form detail-properti ----->								
						</div>
						
					</div>			
				</div>
			</div>
        </div>
		<!---- /Content ---->
        
		
		
        <!---- footer ---->
		<?php 
			include "../../../component/footer.php";
		?>			
		<!---- /footer ---->			
		
		<!---- login-modal ---->
		<?php 
			include "../../../component/login-modal.php";
		?>			
		<!---- /login-modal ---->			
		
    </body>
</html>