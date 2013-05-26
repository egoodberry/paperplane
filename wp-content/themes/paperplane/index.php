<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Paper Plane</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/vendor/reset.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/vendor/grid.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/layout.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.scrollto.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.visualnav.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.carousel.js"></script>
  <script type="text/javascript" src="//use.typekit.net/kzj8upu.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/slideshow.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/nav.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/bg.js"></script>
</head>
<body>

  <?php if (is_page()) { ?>
    Reservations coming soon.
  <?php } else { ?>

  <div id="header" class="cf">
    <div id="header-inner">

      <nav>
        <a href="#reserve">Reserve</a>
        <a href="#about">About</a>
        <a href="#menus">Menus</a>
        <a href="#information">Information</a>
      </nav>

      <a id="logo" href="#home" class="visualNav">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Paper Plane" />
      </a>

      <a id="brand" href="#"><div></div></a>

    </div>
  </div><!-- /header -->

  <div id="content">
    <section id="home" class="content">

      <!-- home background -->
      <?php show_slideshow('Home Photos') ?>

      <img src="<?php bloginfo('template_directory'); ?>/images/title.png" alt="Paper Plane" class="title" />
      <hr />
      <p>Open <i>at</i> 5.00p Tuesday <i>to</i> Saturday</p>
      <div class="vr">&nbsp;</div>
      <section class="address">
        <div>340 Church Street</div>
        <div>Decatur, GA 30030</div>
      </section>
      <div class="phone">404 377 9300</div>
    </section>

    <section id="reserve" class="content">
      <h1>
        <span class="number">02</span>
        Reserve
      </h1>
      <div class="vr">&nbsp;</div>

    </section>

    <section id="about" class="content">
      <!-- about background -->
      <?php show_slideshow('About Photos') ?>

      <div class="container">

        <h1>
          <span class="number">03</span>
          About
        </h1>
        <div class="vr">&nbsp;</div>

        <div class="row">
          <div class="grid_12">
            <p>
              Our story begins with the question: What to drink? Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse erat tellus, facilisis et commodo id, lacinia in purus.
            </p>

            <p>
              We are Paul Calvert, Ian Jones, and Caleb Wheelus (one of us had to take the picture). Nunc malesuada convallis risus, vitae eleifend ipsum euismod in. Fusce vitae quam nisi, sed rutrum libero. Morbi eget justo eros. Curabitur placerat nisi non turpis auctor eget rutrum nulla volutpat.
            </p>

            <p>
              Nisi nibh, ac euismod libero. Curabitur mauris sem, sollicitudin vel semper non, malesuada nec tellus. Nulla facilisi. Our answer: Paper Plane.
            </p>
          </div>
        </div>

      </div>
    </section>

    <section id="menus" class="content">
      <h1>
        <span class="number">04</span>
        Menus
      </h1>
      <div class="vr">&nbsp;</div>

      <div class="container cf">
        <?php show_menus(); ?>
      </div>

    </section>

    <section id="information" class="content">
      <h1>
        <span class="number">05</span>
        Information
      </h1>
      <div class="vr">&nbsp;</div>

      <section>
        <h3>
          Operating Hours
        </h3>
        <p>Tuesday to Thursday, 5.00p &#8212; 12.00a</p>
        <p>Friday to Saturday, 5.00p &#8212; 1.00a</p>
        <p>Sunday and Monday, Closed</p>
      </section>

      <section class="links">
        <a href="mailto:info@vicbrands.com">info@vicbrands.com</a> /
        <a href="#">Facebook</a> /
        <a href="#">Mailing List</a>
      </section>

      <section>
        <p>340 Church Street</p>
        <p>Decatur, GA 30030</p>
        <p>Tel: 404 377 9308</p>
      </section>

      <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=340+Church+Street+Decatur,+GA+30030&ie=UTF8&hq=&hnear=340+Church+St,+Decatur,+Georgia+30030&gl=us&t=m&z=14&ll=33.774048,-84.294923&output=embed"></iframe>

      <p class="open-map">
        <a href="https://maps.google.com/maps?q=340+Church+Street+Decatur,+GA+30030&amp;ie=UTF8&amp;hq=&amp;hnear=340+Church+St,+Decatur,+Georgia+30030&amp;gl=us&amp;t=m&amp;z=14&amp;ll=33.774048,-84.294923&amp;source=embed">Open Map</a>
      </p>

    </section>

    <section id="copyright">
      © Victory Brands
    </section>

  </div><!-- /content -->

  <?php } ?>

</body>
</html>
