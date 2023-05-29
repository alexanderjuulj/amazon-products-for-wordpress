// Can also be used with $(document).ready()
$ = jQuery;

$(window).load(function() {
  // Flex slider for Gallery
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
  // Slick Slider
  $('.slick-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  // Bootstrap Tabs for Feature tabs
  $('#nav-tabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
})
}); 
