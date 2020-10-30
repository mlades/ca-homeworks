$(window).scroll(function () {
  $('.left').each(function () {
      var imagePos = $(this).offset().top;
      var imageHeight = $(this).height();
      var topOfWindow = $(window).scrollTop();

      if (imagePos/2 < topOfWindow + imageHeight && imagePos + imageHeight > topOfWindow/2) {
          $(this).addClass("slide-in-left");
      } else {
          $(this).removeClass("slide-in-left");
      }
  });
  $('.right').each(function () {
      var imagePos = $(this).offset().top;
      var imageHeight = $(this).height();
      var topOfWindow = $(window).scrollTop();

      if (imagePos/2 < topOfWindow + imageHeight && imagePos + imageHeight > topOfWindow/2) {
          $(this).addClass("slide-in-right");
      } else {
          $(this).removeClass("slide-in-right");
      }
  });
  $('.image_right').each(function () {
      var imagePos = $(this).offset().top;
      var imageHeight = $(this).height();
      var topOfWindow = $(window).scrollTop();

      if (imagePos < topOfWindow + imageHeight && imagePos + imageHeight > topOfWindow) {
          $(this).addClass("roll-in-right");
      } else {
          $(this).removeClass("roll-in-right");
      }
  });
  $('.image_left').each(function () {
      var imagePos = $(this).offset().top;
      var imageHeight = $(this).height();
      var topOfWindow = $(window).scrollTop();

      if (imagePos < topOfWindow + imageHeight && imagePos + imageHeight > topOfWindow) {
          $(this).addClass("roll-in-left");
      } else {
          $(this).removeClass("roll-in-left");
      }
  });    
});