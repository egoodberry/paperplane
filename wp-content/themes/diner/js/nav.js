(function() {
  App.setUpNav = function() {
    // smooth scrolling nav
    $("#header nav").visualNav({
      selectedAppliedTo: "a",
      selectedClass: "current"
    });
  }
})();
