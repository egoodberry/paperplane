<?php get_header(); ?>

  <div id="header" class="cf">
    <div id="header-inner">

      <nav>
        <div><a href="/reservations" class="external">Reserve</a></div>
        <div><a href="#contact">Contact</a></div>
        <div><a href="#about">About</a></div>
        <div><a href="#menus">Menus</a></div>
        <div class="mobile"><a href="http://www.vicsandwich.com" class="external">Victory</a></div>
      </nav>

      <a id="logo" href="#home" class="visualNav">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Paper Plane" />
      </a>

      <a id="brand" href="http://www.vicsandwich.com"><div></div></a>

      <a id="expand" href="#">
        <img src="<?php bloginfo('template_directory'); ?>/images/expand.png" alt="Expand Menu" />
      </a>

    </div>
  </div><!-- /header -->

  <div id="content">
    <section id="home" class="content slideshow-container">

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
      <div class="phone">404 377 9308</div>
    </section>

    <section id="contact" class="content">
      <div class="container">
        <h1>
          <span class="number">02</span>
          Contact
        </h1>
        <div class="vr">&nbsp;</div>

        <p class="reserve-warning">Reservations are available for parties of 3 or more.</p>

        <a href="/reservations" class="button">Book a Table</a>

        <p><em>You will be taken to a new page.</em></p>

        <hr class="large" />

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
          <a href="https://www.facebook.com/paperplaneatl">Facebook</a> /
          <a href="http://eepurl.com/z4gPf">Mailing List</a>
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
      </div>
    </section>

    <section id="about" class="content slideshow-container">
      <!-- about background -->
      <?php show_slideshow('About Photos') ?>

      <div class="container">

        <h1>
          <span class="number">03</span>
          About
        </h1>
        <div class="vr">&nbsp;</div>

        <div class="row">
          <div class="grid_10 content">
            <p>
              Paper Plane is at its best an experience. An ever-changing menu of fine food and spirits. A warm, familiar space. A return to classic affairs. An old friend. A new one. An evening well spent.
            </p>

            <p>
              This is Paper Plane— vintage service, modern fare.
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

      <p><em>The menus below are representative, as our menu items change often</em></p>

      <div class="container cf">
        <?php show_menus(); ?>
      </div>

    </section>

    <section id="copyright">
      © Victory Brands
    </section>

  </div><!-- /content -->

</body>
</html>
