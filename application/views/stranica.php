<div class="w3layouts-top-strip">

<div class="container">
<div class="banner-btm-agile">
<div class="col-md-9 btm-wthree-left">

    <?php if(isset($vest)):$vest = $vest[0];  ?>

              <div class="wthree-top">


                  <div class="w3agile-top">

                      <div class="w3agile_special_deals_grid_left_grid">
                          <a href="<?php echo base_url();?>home/vest/<?php echo $vest->id; ?>">
                            <?php if($vest->youtube): ?>
                              <iframe width="854" height="480" src="<?php echo $vest->youtube;?>" frameborder="0" allowfullscreen></iframe>
                            <?php else: ?>
                              <img src="<?php echo base_url(); ?>images/<?php echo $vest->file_name; ?>" class="img-responsive" alt="<?php echo $vest->alt; ?>" />
                            <?php endif; ?>
                          </a>
                      </div>

                  </div>

                  <div class="w3agile-bottom">

                      <div class="col-md-9 w3agile-right">
                          <h3><a href="<?php echo base_url();?>home/vest/<?php echo $vest->id; ?>"><?php echo $vest->title; ?> </a></h3>
                          <p><?php echo $vest->text; ?></p>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>

						<?php endif; ?>
  </div>

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
