<div class="agile-banner">
	</div>
	<!-- //banner -->
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo base_url(); ?>">Почетна</a></li>
				<li class="active">Финансијски Извештаји</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	<div class="container">
		<div class="banner-btm-agile">

		<!-- //btm-wthree-left -->
			<div class="col-md-9 btm-wthree-left">
			<div class="agileits_heading_section">
				<h3 class="wthree_head">Финансијски Извештаји</h3>
				<p class="agileinfo_para">Овде можете преузети финансијске извештаје.</p>
			</div>
				<?php if(isset($reports)): ?>
					<ul style="margin-top:100px;">
						<?php foreach($reports as $r): ?>
							<li><label><?php echo $r->title; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>...Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li><hr>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
			<!-- //btm-wthree-left -->
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
				<h3>Социјалне мреже</h3>
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
				<div class="w3ls_popular_posts">
					<h3>Последње Вести</h3>
					<div class="agileits_popular_posts_grid">
						<div class="w3agile_special_deals_grid_left_grid">
							<a href="singlepage.html"><img src="<?php base_url(); ?>images/1.jpg" class="img-responsive" alt="" /></a>
						</div>
						<h4><a href="singlepage.html">Tellus Faucibus Eleifend Sit Amet</a></h4>
						<h5><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</h5>
					</div>
					<div class="agileits_popular_posts_grid">
						<div class="w3agile_special_deals_grid_left_grid">
								<a href="singlepage.html"><img src="<?php base_url(); ?>images/2.jpg" class="img-responsive" alt="" /></a>
							</div>
						<h4><a href="singlepage.html">Mauris Ut Odio Sed Nisi Convallis</a></h4>
						<h5><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</h5>
					</div>
					<div class="agileits_popular_posts_grid">
						<div class="w3agile_special_deals_grid_left_grid">
								<a href="singlepage.html"><img src="<?php base_url(); ?>images/3.jpg" class="img-responsive" alt="" /></a>
						</div>
						<h4><a href="singlepage.html">Curabitur A Sapien Et Tellus Faucibus</a></h4>
						<h5><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</h5>
					</div>
				</div>

			</div>
			<!-- //btm-wthree-right -->
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- footer -->
