(function() {
  App.setUpSlideshows = function() {
    $('.photo-stream').jCarouselLite({
      btnNext: ".next",
      btnPrev: ".prev",
      speed: 1000,
      visible: 1
    });
  };
})();
