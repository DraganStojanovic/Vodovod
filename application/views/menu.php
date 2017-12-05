<div class="w3layouts-top-strip">

  <div class="container">
         <div class="row">
             <div class="span12">
                 <div class="well">
                     <div id="myCarousel" class="carousel fdi-Carousel slide">
                      <!-- Carousel items -->
                         <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
                             <div class="carousel-inner onebyone-carosel">
                                 <div class="item active">
                                     <div class="col-md-4">
                                         <a href="#"><iframe width="300" height="250" src="https://www.youtube.com/embed/W9-zYbTvyUk" frameborder="0" allowfullscreen></iframe></a>
                                         <div class="text-center"></div>
                                     </div>
                                 </div>
                                 <div class="item">
                                     <div class="col-md-4">
                                         <a href="#"><iframe width="300" height="250" src="https://www.youtube.com/embed/nXdoFc-i89k" frameborder="0" allowfullscreen></iframe></a>
                                         <div class="text-center"></div>
                                     </div>
                                 </div>
                                 <div class="item">
                                     <div class="col-md-4">
                                         <a href="#"><iframe width="300" height="250" src="https://www.youtube.com/embed/hyEo6wL0UKc" frameborder="0" allowfullscreen></iframe></a>
                                         <div class="text-center"></div>
                                     </div>
                                 </div>
                                 <div class="item">
                                     <div class="col-md-4">
                                         <a href="#"><iframe width="300" height="250" src="https://www.youtube.com/embed/Z-e41GPCtFI" frameborder="0" allowfullscreen></iframe></a>
                                         <div class="text-center"></div>
                                     </div>
                                 </div>
                                 <div class="item">
                                     <div class="col-md-4">
                                         <a href="#"><iframe width="300" height="250" src="https://www.youtube.com/embed/FxZ8ER671Cs" frameborder="0" allowfullscreen></iframe></a>
                                         <div class="text-center"></div>
                                     </div>
                                 </div>
                                 <div class="item">
                                     <div class="col-md-4">
                                         <a href="#"><iframe width="300" height="250" src="https://www.youtube.com/embed/KeWAvzZZ_XM" frameborder="0" allowfullscreen></iframe></a>
                                         <div class="text-center"></div>
                                     </div>
                                 </div>
                                 <div class="item">
                                     <div class="col-md-4">
                                         <a href="#"><iframe width="300" height="250" src="https://www.youtube.com/embed/ntFvvcvGuRQ" frameborder="0" allowfullscreen></iframe></iframe></a>
                                         <div class="text-center"></div>
                                     </div>
                                 </div>
                                 <div class="item">
                                     <div class="col-md-4">
                                         <a href="#"><iframe width="300" height="250" src="https://www.youtube.com/embed/ukk6glzH4Ak" frameborder="0" allowfullscreen></iframe></a>
                                         <div class="text-center"></div>
                                     </div>
                                 </div>
                             </div>
                             <a class="left carousel-control" href="#eventCarousel" data-slide="prev"></a>
                             <a class="right carousel-control" href="#eventCarousel" data-slide="next"></a>
                         </div>
                         <!--/carousel-inner-->
                     </div><!--/myCarousel-->
                 </div><!--/well-->
             </div>
         </div>
     </div>

   <script>
   $(document).ready(function () {
$('#myCarousel').carousel({
interval: 5000
})
$('.fdi-Carousel .item').each(function () {
var next = $(this).next();
if (!next.length) {
    next = $(this).siblings(':first');
}
next.children(':first-child').clone().appendTo($(this));

if (next.next().length > 0) {
    next.next().children(':first-child').clone().appendTo($(this));
}
else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
}
});
});
   </script>


<div class="container">
<div class="banner-btm-agile">
<div class="col-md-9 btm-wthree-left">
                    <h2 align="center"><strong><span style="color:black">ДНЕВНИ БИЛТЕН</p></span></strong></h2><br>
                    <h3 align="center"><strong><span style="color:black">Погледајте дневна дешавања на терену.</span></strong></h3><br><br>
                    <!--<h2 align="center"><strong><span style="color:red">ВАЖНА ОБАВЕШТЕЊА</p></span></strong></h2><br>!-->
                    <h3 align="center"><strong><span style="color:black">ИЗВЕШТАЈ ПЛАНИРАНИХ РАДОВА СЕКТОРА ОДРЖАВАЊА ВОДОВОДНИХ МРЕЖА ЗА 17.11.2017.год</span></strong></h3><br><br>
                    <ol><strong><span style="color:black">
  <li>Обреновац,насеље код старог гробља замена вентила ф2,затварање воде у
  Немањиној улици, од Трафоа до Ројковца;</li>
  <li>Испирање водоводних цеви Барич-Колонија од 9-15 часова;</li>
  <li>Обреновац,насеље Ројковац,испирање водоводних цеви од 8-15 часова;</li>
  <li>Обреновац,насеље Дудови,испирање водоводних цеви од 8-17 часова;</li>
  <li>Одвоз питке воде у Велико Поље,Пироман,Бровић,Љубинић,Вукићевица и
  Орашац.</li>
</span></strong></ol>

      <?php if(isset($news)): ?>
        <?php foreach($news as $n): ?>

              <div class="wthree-top">
                  <div class="w3agile-top">
                      <div class="w3agile_special_deals_grid_left_grid">
                          <a href="<?php echo base_url();?>home/vest/<?php echo $n->id; ?>">
                            <?php if($n->youtube): ?>
                              <iframe width="854" height="480" src="<?php echo $n->youtube;?>" frameborder="0" allowfullscreen></iframe>
                            <?php else: ?>
                              <img src="<?php echo base_url(); ?>images/<?php echo $n->file_name; ?>" class="img-responsive" alt="<?php echo $n->alt; ?>" />
                            <?php endif; ?>
                          </a>
                      </div>

                  </div>

                  <div class="w3agile-bottom">

                      <div class="col-md-9 w3agile-right">
                          <h3><a href="<?php echo base_url();?>home/vest/<?php echo $n->id; ?>"><?php echo $n->title; ?> </a></h3>
                          <p><?php echo $n->summary; ?></p>
                          <a class="agileits w3layouts" href="<?php echo base_url();?>home/vest/<?php echo $n->id; ?>">Read More <span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>

        <?php endforeach; ?>
      <?php else: echo "Nema vesti."; ?>
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
