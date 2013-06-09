(function() {
  App.stretchBackground = function() {
    // make each 'page' at least as tall as the viewport, basically.
    $('section.content').css('min-height', $(window).height() - 60);
  };
})();
