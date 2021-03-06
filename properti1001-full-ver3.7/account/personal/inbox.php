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
					<div class="span7 offset2" >
						<div class="iklan"><p>SPACE IKLAN</p></div>
					</div>					
				</div>			
			</div>	
		</div>
		<div id="line-orange"></div><!---- /Header ---->
		
		<!---- Content ---->
        <div id="wrap" style="">
			<p class="link-navigation-web"><a href="../../home.php">Home</a> / <a href="inbox.php">Inbox Messages</a></p>
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
													<a class="" href="javascript:void(0)"><i class="icon-user-md"></i> PROFILE </a>
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
													<a class="active5" href="javascript:void(0)"><i class="icon-magic"></i> TOOLS </a>
													<ul class="dropdown-nav5">
														<li><a class="active-acc pull-left" href="properti-pilihan.php">favorite properties <i class="icon-heart-empty pull-right" style="font-size:16px;"></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="inbox.php">Inbox <i class="icon-comment pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
														<li><a class="pull-left" href="inbox.php">CS &amp; Personal / Personal <i class="icon-comments pull-right" style="font-size:16px;"></i></i><div style="clear:both;"></div></a></li>
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
						<div class="span12 tab-accountl tab-acc jrk">
							<div class="row-fluid">	
								<div class="span12" style="margin: 0px 0px 5px 0px;"><!---- span12 in ---->
									<div class="tabbable tab-contprop4">
										<ul class="nav nav-tabs">
											<li class="active"><a href="#pane1" data-toggle="tab"><i class="icon-inbox" style="font-size:16px;"></i> Kotak Masuk</a></li>
											<li><a href="#pane2" data-toggle="tab"><i class="icon-share" style="font-size:16px;"></i> Pesan Terkirim</a></li>
										</ul>
										<div class="tab-content tab-content-bg">
										
											<!---- tab 1 ---->
											<div id="pane1" class="tab-pane active smpn-pcrn">
												<!----- form inbox messages ----->
												<form id="" class="">
													<ul class="nav nav-tabs" style="min-height:500px;">
														<!--
														<div class="controls-search controls-search2" style="height:5px;">
														</div>
														-->
														<div class="pull-left" style="margin:0px 0px 0px 0px;padding:5px;">
															<a class="btn btn-success" href="#pesanModal" rel="tooltip" data-placement="bottom" data-toggle="modal" style="padding:7px 15px;font-weight:bold;">
																<i class="icon-envelope-alt" style="font-size:16px;"></i> Tulis Pesan Baru
															</a>
														</div>
														<div class="pull-right" style="margin:0px 0px 0px 0px;padding:5px;">
															<input type="submit" value="Delete" class="btn btn-danger" style="font-weight:bold;padding:9px 20px;">
															<input type="submit" value="Reply" class="btn btn-primary" style="font-weight:bold;padding:9px 20px;">
														</div>
														<div style="clear:both;"></div>
														<div id="" class="" style="margin:0px;">
															<table class="table table6 table-condensed table-bordered table-striped" style="overflow:hidden;">
																<thead>
																	<tr>
																		<th class="title-table-credit">#</th>
																		<th class="title-table-credit">Date</th>
																		<th class="title-table-credit">Status</th>
																		<th class="title-table-credit">From</th>													
																		<th class="title-table-credit">Message</th>
																	</tr>
																</thead>
																<tbody>
																	<tr class="tr-msg">
																		<td class="isi-table-credit"><input class="uniform" name="checkbox" style="margin:-4px 5px -2px 5px;" type="checkbox" value="option1"></td>
																		<td class="isi-table-credit tgl-msg">
																			<div>
																				1/10/2012
																			</div>
																		</td>
																		<td class="isi-table-credit tipe-acc">
																			<div style="overflow:hidden;white-space:nowrap;text-align:left;">
																				Personal
																			</div>
																		</td>
																		<td class="isi-table-credit send-name">
																			<div style="width:100px;overflow:hidden;white-space:nowrap;text-align:left;">
																				hanzptro2
																			</div>
																		</td>
																		<td class="isi-table-credit isi-msg" style="width:400px;overflow:hidden;">
																			<div style="width:400px;overflow:hidden;white-space:nowrap;">
																				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
																			</div>
																		</td>
																	</tr>												
																</tbody>
															</table>
														</div>								
													</ul>
												</form>
												<!----- /form inbox messages ----->
											</div>											
											<!---- /tab 1 ---->
											
											<!---- tab 2 ---->
											<div id="pane2" class="tab-pane smpn-pcrn">
												<!----- form inbox messages ----->
												<form id="" class="">
													<ul class="nav nav-tabs" style="min-height:500px;">
														<!--
														<div class="controls-search controls-search2" style="height:5px;">
														</div>
														-->
														<div class="pull-left" style="margin:0px 0px 0px 0px;padding:5px;">
															<a class="btn btn-success" href="#pesanModal" rel="tooltip" data-placement="bottom" data-toggle="modal" style="padding:7px 15px;font-weight:bold;">
																<i class="icon-envelope-alt" style="font-size:16px;"></i> Tulis Pesan Baru
															</a>
														</div>
														<div class="pull-right" style="margin:0px 0px 0px 0px;padding:5px;">
															<input type="submit" value="Delete" class="btn btn-danger" style="font-weight:bold;padding:9px 20px;">
															<input type="submit" value="Reply" class="btn btn-primary" style="font-weight:bold;padding:9px 20px;">
														</div>
														<div style="clear:both;"></div>
														<div id="" class="" style="margin:0px;">
															<table class="table table6 table-condensed table-bordered table-striped" style="overflow:hidden;">
																<thead>
																	<tr>
																		<th class="title-table-credit">#</th>
																		<th class="title-table-credit">Date</th>
																		<th class="title-table-credit">Status</th>
																		<th class="title-table-credit">From</th>													
																		<th class="title-table-credit">Message</th>
																	</tr>
																</thead>
																<tbody>
																	<tr class="tr-msg">
																		<td class="isi-table-credit"><input class="uniform" name="checkbox" style="margin:-4px 5px -2px 5px;" type="checkbox" value="option1"></td>
																		<td class="isi-table-credit tgl-msg">
																			<div>
																				1/10/2012
																			</div>
																		</td>
																		<td class="isi-table-credit tipe-acc">
																			<div style="overflow:hidden;white-space:nowrap;text-align:left;">
																				Personal
																			</div>
																		</td>
																		<td class="isi-table-credit send-name">
																			<div style="width:100px;overflow:hidden;white-space:nowrap;text-align:left;">
																				hanzptro2
																			</div>
																		</td>
																		<td class="isi-table-credit isi-msg" style="width:400px;overflow:hidden;">
																			<div style="width:400px;overflow:hidden;white-space:nowrap;">
																				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
																			</div>
																		</td>
																	</tr>												
																</tbody>
															</table>
														</div>								
													</ul>
												</form>
												<!----- /form inbox messages ----->
											</div>
											<!---- /tab 2 ---->
										</div><!-- /.tab-content -->
									</div><!-- /.tabbable -->
								</div><!---- /span12 in ---->
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
		
		<!-- #pesanModal -->
        <div id="pesanModal" class="modal modal7 hide fade" tabindex="-1" role="dialog" aria-labelledby="pesanModalLabel"
             aria-hidden="true">
			<form>
			<div class="row-fluid menu-account modal-header modal-header2">
				<div class="span12">
					<h5 id="helpModalLabel" style="margin:0px;padding:6px 0px 0px 15px;"><i class="icon-external-link"></i> Tulis Pesan</h5>
				</div>
			</div>
            <div class="modal7-body">
				<div class="row-fluid">
					<div class="span12 bg-form-post bg-input-text" style="padding:10px;">
						<input class="span8" type="text" id="" placeholder="To: abc@properti1001.com" style="border-radius:0px;"/>
						<input class="span8" type="text" id="" placeholder="Subject:" style="border-radius:0px;"/>
						<textarea class="span12" rows="10" name="description" placeholder="Message:" id="" style="border-radius:0px;"></textarea>
					</div>
					<input type="submit" value="Kirim" class="btn btn-primary pull-right" style="margin-top:10px;font-weight:bold;padding:7px 20px;">
				</div>
			</div>					
			</form>
        </div>
		
    </body>
</html>