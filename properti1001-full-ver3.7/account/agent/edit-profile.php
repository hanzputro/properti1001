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
		<link type="text/css" rel="stylesheet" href="../../assets/css/jasny-bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/uniform.default.css"/>
		
		<!-- JS -->		
		<script type="text/javascript" src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="../../assets/js/vendor/bootstrap.js"></script>
		<script type="text/javascript" src="../../assets/js/jasny-bootstrap.min.js"></script>
		<script type="text/javascript" src="../../assets/js/jquery.uniform.min.js"></script>
		<script type="text/javascript">
		
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
			<p class="link-navigation-web"><a href="../../home.php">Home</a> / <a href="edit-profile.php">Edit Profile</a></p>
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
													<a class="" href="javascript:void(0)"><i class="icon-briefcase"></i> AGENT ACCOUNT </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="my-account.php">Dashboard <i class="icon-coffee pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="my-credit.php">My Credits <i class="icon-money pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
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
													<a class="" href="packages-listing.php"><i class="icon-folder-open-alt"></i> PACKAGE </a>
													<!--
													<ul class="dropdown-nav5">
														<li><a class="pull-left" href="packages-listing.php">Packages <i class="icon-hdd pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="expired-listing.php">Expired Listing <i class="icon-ban-circle pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
													</ul>
													-->
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
							<h3>Edit Profile</h3>
							<!--
							<p>Pastikan password lama anda dan silahkan menggantinya.</p>
							-->
							<hr style="margin:10px 0px 0px 0px">
							<div id="collapse3" class="accordion-body collapse in body">								
                                <form action="#">									
									<div class="bg-form-post">
										<!--
										<div class="alert alert-error">
											<a class="close" data-dismiss="alert" href="#">x</a>Isi form dengan lengkap dan pastikan data valid!
										</div>
										-->
										<div class="row-fluid">
											<div class="span6">												
												<div class="control-group">
                                                    <label class="control-label" style="font-size:12px;color:#555;">Photo profile </label>
                                                    <div class="controls">
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                            <div class="fileupload-new thumbnail" style="width: 130px; height: 150px;background:#f1f1f1;border:5px solid #fff;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>
                                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 130px; line-height: 20px;"></div>
                                                            <div class="controls">
																<input type="file"/>
															</div>
                                                        </div>
														<hr>
                                                    </div>
                                                </div>
											</div>
											
											<div class="span6">												
												<div class="control-group">
                                                    <label class="control-label" style="font-size:12px;color:#555;">Logo Agent Perusahan </label>
                                                    <div class="controls">
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                            <div class="fileupload-new thumbnail" style="width:94%;height:150px;background:#f1f1f1;border:5px solid #fff;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>
                                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width:130px;line-height:20px;"></div>
                                                            <div class="controls">
																<input type="file"/>
															</div>
                                                        </div>
														<hr>
                                                    </div>
                                                </div>												
											</div>
										</div>
										<div class="row-fluid">
											<div class="span6">
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Nama Depan <font style="color:#03a0ef;">*</font></label>
													<div class="controls bg-input-text">
														<input type="text" id="username" name="username" class="span12">
													</div>
												</div>												
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Email <font style="color:#03a0ef;">*</font></label>
													<div class="controls bg-input-text">
														<input type="text" id="username" name="username" class="span12">
													</div>
												</div>
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">No Telp <font style="color:#03a0ef;">*</font></label>
													<div class="controls bg-input-text">
														<input type="text" id="username" name="username" class="span12">
													</div>
												</div>
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">No Handphone <font style="color:#03a0ef;">*</font></label>
													<div class="controls bg-input-text">
														<input type="text" id="username" name="username" class="span12">
													</div>
												</div>
											</div>
											
											<div class="span6">
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Nama Belakang <font style="color:#03a0ef;">*</font></label>
													<div class="controls bg-input-text">
														<input type="text" id="username" name="username" class="span12">
													</div>
												</div>												
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Website </label>
													<div class="controls bg-input-text">
														<input type="text" id="username" name="username" class="span12">
													</div>
												</div>
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">No Fax </label>
													<div class="controls bg-input-text">
														<input type="text" id="username" name="username" class="span12">
													</div>
												</div>	
											</div>
										</div>
										
										<hr style="margin:5px 0px 5px 0px">
										<div class="row-fluid">
											<div class="span6">
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Nama Agent Perusahaan<font style="color:#03a0ef;">*</font></label>
													<select data-placeholder="" class="span12 select2" tabindex="9">
														<option selected>Independent Property Agent</option>
														<option>Rumah</option>
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
													<div class="control-group" style="margin:0px;">
														<label class="control-label" style="font-size:12px;color:#555;">Spesialis </label>
														<div class="controls bg-input-text">
															<input type="text" id="username" name="username" class="span12">
														</div>
													</div>	
												</div>
											</div>
										</div>
										<div class="row-fluid">
											<div class="span12">
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Perkenalan & Selling Point</label>
													<div class="controls bg-input-text">
														<textarea type="text" id="username" name="username" class="span12" rows="3" style="background:#f5f5f5;"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										<hr style="margin:5px 0px 5px 0px">
										<div class="row-fluid">
											<div class="span6">
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Provinsi <font style="color:#03a0ef;">*</font></label>
													<select data-placeholder="" class="span12 select2" tabindex="9">
														<option selected>Semua Properti</option>
														<option>Rumah</option>
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
													<div class="control-group" style="margin:0px;">
														<label class="control-label" style="font-size:12px;color:#555;">Kota <font style="color:#03a0ef;">*</font></label>
														<select data-placeholder="" class="span12 select2" tabindex="9">
															<option selected>Semua Properti</option>
															<option>Rumah</option>
															<option>Ruko</option>
															<option>Apartemen</option>
															<option>Tanah</option>
															<option>Gudang</option>
															<option>Kantor</option>
															<option>Gedung</option>
														</select>
													</div>		
												</div>
											</div>
										</div>
										<div class="row-fluid">
											<div class="span12">
												<div class="control-group" style="margin:0px;">
													<label class="control-label" style="font-size:12px;color:#555;">Alamat Lengkap <font style="color:#03a0ef;">*</font></label>
													<div class="controls bg-input-text">
														<textarea type="text" id="username" name="username" class="span12" rows="3" style="background:#f5f5f5;"></textarea>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="bg-title-post">
										<label class="control-label pull-left" style="font-size:12px;color:#555;margin:8px 0px 0px 0px;">Tanda<font style="color:#03a0ef;"> * </font>Wajib diisi</label>
										<input type="submit" value="EDIT PROFILE" class="btn btn-primary pull-right" style="padding:7px 22px;margin:12px 0px 12px 0px;font-size:16px;font-weight:bold;">
										<div class="" style="clear:both;"></div>
									</div>
                                </form>
                            </div>
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