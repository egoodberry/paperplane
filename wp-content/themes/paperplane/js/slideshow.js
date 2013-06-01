(function() {
  App.setUpSlideshows = function() {
    $('.slideshow-container').each(function() {
      var container = $(this)
      , photoContainer = container.find('.photo-stream')
      , photos = photoContainer.find('.photo')
      , windowWidth = $(window).width();

      photos.each(function() {
        $(this).width(windowWidth);
      });

      photoContainer.width(photos.size() * windowWidth);
      var leftValue = windowWidth * -1;

      photoContainer.css({ 'left': leftValue});

      var step = function(direction) {
        var current = container.find('.current')
          , isPrevious = (direction === 'prev')
          , target = isPrevious ? current.prev() : current.next();

        var src = target.data('src');
        var img = new Image();
        img.onload = function () {
          target.css('background-image', 'url(' + src + ')');

          var photoContainerLeft = photoContainer.offset().left;
          var leftIndent =
            isPrevious ?
              photoContainerLeft + windowWidth :
              photoContainerLeft - windowWidth;

          photoContainer.animate({ 'left' : leftIndent }, function(){
            if (isPrevious) {
              photoContainer.find('.photo:first').before(photoContainer.find('.photo:last'));
            }
            else {
              photoContainer.find('.photo:last').after(photoContainer.find('.photo:first'));
            }

            photoContainer.css({ 'left' : leftValue });

            container.find('.current').removeClass('current');
            target.addClass('current');
          });
        };
        img.src = src;
      }

      container.find('a.prev')
        .unbind('click')
        .bind('click', function() {
          step('prev');
        });
      container.find('a.next')
        .unbind('click')
        .bind('click', function() {
          step('next');
        });
    });
  };

  $(window).bind('resize', function() {
    App.setUpSlideshows();
  });
})();
