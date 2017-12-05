<div class="agile-banner">
	</div>
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo base_url(); ?>">Почетна</a></li>
				<li class="active">Галерија</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	<!-- //banner -->
	<div class="container">
		<div class="banner-btm-agile">
		<!-- //btm-wthree-left -->
			<div class="col-md-9 btm-wthree-left">
				<div class="agileits_heading_section">
				<h3 class="wthree_head">Галерија</h3>
				<p class="agileinfo_para">Неке од наших слика.</p>
			</div>
			<div class="w3ls_work_grids">
				<?php if($pics): ?>
					<?php foreach($pics as $pic): ?>
						<div class="col-md-6 agileits_w3layouts_work_grid">
							<div class="agileits_w3layouts_work_grid1 w3layouts_work_grid1 hover14 column">
								<div class="w3_agile_work_effect">
									<a href="<?php base_url(); ?>images/<?php echo $pic->file_name; ?>" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
										<figure>
											<img src="<?php base_url(); ?>images/<?php echo $pic->file_name; ?>" alt="<?php echo $pic->alt; ?>" class="img-responsive" />
										</figure>
									</a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php else: ?>
					<?php echo "Trenutno nema zapisa." ?>
				<?php endif; ?>

				<div class="clearfix"> </div>
			</div>

			</div>
			<!-- //btm-wthree-left -->
			<script type="text/javascript" src="<?php base_url(); ?>js/smoothbox.jquery2.js"></script>
				<!-- btm-wthree-right -->
			<div class="col-md-3 w3agile_blog_left">
				<div class="wthreesearch">
							<form action="#" method="post">
								<input type="search" name="Search" placeholder="Search here" required="">
								<button type="submit" class="btn btn-default search" aria-label="Left Align">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>

				</div>

				<div class="agileinfo_calender">
				<h3>социјалне мреже</h3>
				<div class="w3ls-social-icons-1">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-google-plus"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-rss"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-behance"></i></a>
				</div>
				</div>

				<?php if(isset($news)): ?>
				<?php foreach ($news as $n): ?>
				<div class="w3ls_popular_posts">

						<h3><a href="<?php echo base_url();?>home/vest/<?php echo $n->id; ?>"><strong><span style="color:black"><?php echo $n->title; ?></span></strong> </a></h3>

						<div class="agileits_popular_posts_grid">
								<div class="w3agile_special_deals_grid_left_grid">

										<a href="<?php echo base_url();?>home/vest/<?php echo $n->id; ?>">
											<?php if($n->youtube): ?>
												<iframe width="270" height="210" src="<?php echo $n->youtube;?>" frameborder="0" allowfullscreen></iframe>
											<?php else: ?>
												<img src="<?php echo base_url(); ?>images/<?php echo $n->file_name; ?>" class="img-responsive" alt="<?php echo $n->alt; ?>" />
											<?php endif; ?>

										</a>
								</div>

								<h4><a href="<?php echo base_url();?>home/vest/<?php echo $n->id; ?>"><?php echo $n->title; ?> </a></h4>
								<p><?php echo $n->summary; ?></p>

						</div>
				</div>

			<?php endforeach; ?>
			<?php else: echo "Nema vesti."; ?>
			<?php endif; ?>


				<!-- <div class="w3l_categories">
					<h3>Categories</h3>
					<ul>
						<li><a href="singlepage.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>tellus faucibus eleifend sit amet</a></li>
						<li><a href="singlepage.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Mauris ut odio sed nisi convallis</a></li>
						<li><a href="singlepage.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Curabitur a sapien et tellus faucibus</a></li>
						<li><a href="singlepage.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>porta nunc eget, lobortis nulla</a></li>
						<li><a href="singlepage.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Sed ut metus turpis cursus convallis</a></li>
						<li><a href="singlepage.html"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Maecenas cursus at ex a faucibus</a></li>
					</ul>
				</div> -->
			<!-- <div class="w3ls_recent_posts">
					<h3>Recent Posts</h3>
					<div class="agileits_recent_posts_grid">
						<div class="agileits_recent_posts_gridl">
							<div class="w3agile_special_deals_grid_left_grid">
									<a href="singlepage.html"><img src="<?php base_url(); ?>images/1.jpg" class="img-responsive" alt="" /></a>
								</div>
						</div>
						<div class="agileits_recent_posts_gridr">
							<h4><a href="singlepage.html">velit esse quam nihil</a></h4>
							<h5><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</h5>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="agileits_recent_posts_grid">
						<div class="agileits_recent_posts_gridl">
							<div class="w3agile_special_deals_grid_left_grid">
									<a href="singlepage.html"><img src="<?php base_url(); ?>images/2.jpg" class="img-responsive" alt="" /></a>
								</div>
						</div>
						<div class="agileits_recent_posts_gridr">
							<h4><a href="singlepage.html">Class aptent taciti </a></h4>
							<h5><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</h5>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="agileits_recent_posts_grid">
						<div class="agileits_recent_posts_gridl">
							<div class="w3agile_special_deals_grid_left_grid">
									<a href="singlepage.html"><img src="<?php base_url(); ?>images/3.jpg" class="img-responsive" alt="" /></a>
								</div>
						</div>
						<div class="agileits_recent_posts_gridr">
							<h4><a href="singlepage.html">Maecenas eget erat </a></h4>
							<h5><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</h5>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div> !-->
			<!-- S<div class="w3l_tags">
					<h3>Tags</h3>
					<ul class="tag">
						<li><a href="singlepage.html">Fashion</a></li>
						<li><a href="singlepage.html">Photography</a></li>
						<li><a href="singlepage.html">Artist</a></li>
						<li><a href="singlepage.html">Music</a></li>
						<li><a href="singlepage.html">Shop</a></li>
						<li><a href="singlepage.html">Corporate</a></li>
						<li><a href="singlepage.html">Personal</a></li>
						<li><a href="singlepage.html">Restaurant</a></li>
						<li><a href="singlepage.html">Business</a></li>
					</ul>
				</div> !-->
			</div>
			<!-- //btm-wthree-right -->
			<div class="clearfix"></div>
		</div>
	</div>
