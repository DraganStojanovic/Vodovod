<div class="agile-banner">
	</div>
	<!-- //banner -->
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo base_url(); ?>">Почетна</a></li>
				<li class="active">Ценовник</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	<div class="container">
		<div class="banner-btm-agile">

		<!-- //btm-wthree-left -->

			<div class="agileits_heading_section">
				<h3 class="wthree_head">Ценовник услуга ЈКП "ВИК" Обреновац</h3>
				<p class="agileinfo_para">Овде можете погледати ценовнике.</p>
			</div>
				<?php if(isset($reports)): ?>
					<ul style="margin-top:100px;">
						<?php foreach($reports as $r): ?>
							<li><label><?php echo $r->title; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>...Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li><hr>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>

			<!-- //btm-wthree-left -->
				<!-- btm-wthree-right -->






			</div>
			<!-- //btm-wthree-right -->
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- footer -->
