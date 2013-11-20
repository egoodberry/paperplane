(function() {
  App.setUpDatepicker = function() {
    function isValid(date) {
      var day = date.getDay();
      return day != 0 && day != 1;
    }

    function getDefaultDate() {
      if (savedDate = $('#reservation_date').data('saved')) {
        return savedDate;
      }

      var date = new Date();
      while (!isValid(date)) {
          date.setDate(date.getDate() + 1);
      }
      return date;
    }

    $('.datepicker').datepicker({
      defaultDate: getDefaultDate(),
      beforeShowDay: function(date) {
        return [isValid(date), ''];
      },
      onSelect: function(dateText) {
        $('#reservation_date').val(dateText);
      }
    });
    $('.ui-datepicker-current-day').click();
  };
})();
