<div class="agile-banner">
	</div>
	<!-- //banner -->
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo base_url(); ?>">Почетна</a></li>
				<li class="active">Рекламације</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	<div class="container">
		<div class="banner-btm-agile">

		<!-- //btm-wthree-left -->
			<div class="col-md-9 btm-wthree-left">
			<div class="agileits_heading_section">
				<h3 class="wthree_head">Реклмације</h3>
				<p class="agileinfo_para">Овако можете уложити реклмације.</p><br><br>
        <ul> <li>Корисник може да у комуналном предузећу поднесе рекламацију на обрачун за испоручену воду у писаној форми на месту за пријем реклaмација (у дирекцији ЈКП “Водовод и канализација” Обреновац, Цара Лазара 3/1, Обреновац), телефонски или путем е-mail (reklamacijevik@magnetplus.net) <span style="color:red">најкасније у року од осам дана од дана када му је достављен обрачун, тј.рачун.</span></li>
        </ul><br><br>
        <p class="agileinfo_para">Телефон за реклмације.</p><br><br>
        <ul>
            <li>011/6304 – 461.</li>
            <li><span style="color:blue">Бесплатна тел.линија</span> : 0800-0000-87</li>
        </ul>

			</div>
				<?php if(isset($reports)): ?>
					<ul style="margin-top:100px;">
						<?php foreach($reports as $r): ?>
							<li><label><?php echo $r->title; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>...Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excell fajl</a>" ?></li>
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

			</div>
			<!-- //btm-wthree-right -->
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- footer -->
