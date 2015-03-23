<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.css"/>
        <!--<link type="text/css" rel="stylesheet" href="../assets/css/bootstrap-responsive.css"/>-->
        <link type="text/css" rel="stylesheet" href="../assets/css/font-awesome.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/style.css"/>
		<link type="text/css" rel="stylesheet" href="../assets/css/featured-post-slider.css"/>
		
		<!-- JS -->		
		<script type="text/javascript" src="../assets/js/vendor/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="../assets/js/vendor/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="../assets/js/vendor/bootstrap.js"></script>
		<script type="text/javascript" src="../assets/js/jquery-ui-1.9.0.custom.min.js"></script>
		<script type="text/javascript" src="../assets/js/jquery-ui-tabs-rotate.js"></script>
		<script type="text/javascript" src="../assets/js/readmore.js"></script>
		<script type="text/javascript" src="../assets/js/bootstrap-paginator.js"></script>
		
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
					<div class="span7 offset2" style="height:97px; background: #e1e1e1;">
						<div class="iklan"><p>SPACE IKLAN</p></div>
					</div>
				</div>			
			</div>	
		</div>
		<div id="line-orange"></div><!---- /Header ---->
		
		
        <div id="wrap"><!---- Content ---->
			<p class="link-navigation-web"><a href="../home.php">Home</a> &raquo; <a href="list-news.php">News</a></p>
			<!-- #menu -->
            <div id="main-menu">
				<div class="navbar navbar-inverse navbar-static-top">
					<div class="navbar-inner navbar-inner2">
						<div class="container-fluid">				
							<ul class="nav nav2">
								<li><a href="../home.php"><i class="icon-home"></i> Properti</a></li>
								<li><a class="active2" href="../list-agent.php"><i class="icon-group"></i> Agent Properti</a></li>                             
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
						
							<!---- featured-post-slider ---->
							<?php 
								include "../component/newsfeatured-post-slider.php";
							?>			
							<!---- /featured-post-slider ---->
							
							<div class="row-fluid jrk">	
								<div class="span12">
									<div class="tabbable tab-contprop2">
										<!----- Urut berdasarkan ----->
										<ul class="nav nav-tabs smpn-pcrn" style="margin-bottom:0px;">											
											<div class="controls-search controls-search2">												
												<div class="input-append pull-right">
													<input type="text" id="username" name="username" class="" placeholder="Search News">
													<button id="box1Clear" class="btn btn-warning" type="button"><i class="icon-search" style=""></i></button>
												</div>
											</div>
											<div class="" style="clear:both;"></div>									
										</ul>
										<!----- /Urut berdasarkan ----->
										<div class="line-diagonal" style="height:10px;"></div>
											<div class="tab-content-bg">
											<hr style="margin:10px 0px 0px 0px;">
											<div class="row-fluid"> 
													
													<!---- list-news ---->
													<div class="row-fluid"> 												
														<div class="span12 news-list-out">
															<div class="row-fluid">
																<div class="span12 news-list-in">
																	<div class="row-fluid">					
																		<div class="span12 news-list-content">
																			<a href="#" class="title-article">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit, Sed Diam Donummy</a>																			
																			<div class="article-list">																			
																			<img src="../assets/img/featured-post/image1.jpg" alt=""/>
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit,sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
																			Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
																			sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
																			sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit,sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
																			Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
																			sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
																			sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
																			</div>
																			<a href="#" class="more" style="">Read more &raquo;</a>
																		</div>																			
																	</div>
																</div>
															</div>														
														</div>
													</div> 
													<!---- /list-news ---->	
													
													<!---- list-news ---->
													<div class="row-fluid"> 												
														<div class="span12 news-list-out">
															<div class="row-fluid">
																<div class="span12 news-list-in">
																	<div class="row-fluid">					
																		<div class="span12 news-list-content">
																			<a href="#" class="title-article">Rumah Tua Di Kebon Kacang Dijual... HITUNG TANAH SAJA... TERMURAH !!! PALING MURAH !!!</a>																			
																			<div class="article-list">																			
																			<img src="../assets/img/featured-post/image2.jpg" alt=""/>
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit,sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
																			Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
																			sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
																			sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit,sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
																			Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
																			sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
																			sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et	
																			</div>	
																			<a href="#" class="more" style="">Read more &raquo;</a>
																		</div>																			
																	</div>
																</div>
															</div>														
														</div>
													</div> 
													<!---- /list-news ---->	
													
													<!---- list-news ---->
													<div class="row-fluid"> 												
														<div class="span12 news-list-out">
															<div class="row-fluid">
																<div class="span12 news-list-in">
																	<div class="row-fluid">					
																		<div class="span12 news-list-content">
																			<a href="#" class="title-article">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit</a>																			
																			<div class="article-list">																			
																			<img src="../assets/img/featured-post/image3.jpg" alt=""/>
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit,sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
																			Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
																			sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
																			sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit,sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
																			Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
																			sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
																			sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
																			tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
																			velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
																			</div>
																			<a href="#" class="more" style="">Read more &raquo;</a>
																		</div>																			
																	</div>
																</div>
															</div>														
														</div>
													</div> 
													<!---- /list-news ---->	
													
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
								<div class="span12 jrk" style="height:88px; background: #e1e1e1;">
									<div class="iklan"><p>SPACE IKLAN</p></div>
								</div>
							</div>
						</div>
						
						<!---- Sidebar ---->
						<?php 
							include "../component/sidebar.php";
						?>			
						<!---- /Sidebar ---->
					</div>  
				</div>
			</div>
        </div><!---- /Content ---->
        
		
		<!---- footer ---->
		<?php 
			include "../component/footer.php";
		?>			
		<!---- /footer ---->			
		
		<!---- login-modal ---->
		<?php 
			include "../component/login-modal.php";
		?>			
		<!---- /login-modal ---->			
		
    </body>
</html>