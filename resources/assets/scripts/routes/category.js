export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    function thumbAutoSize() {

      // var $columnW = $('.grid-sizer').width();

      var width = $('.grid-sizer').width();
      var height = Math.floor(width * 0.5625);

      $('article.small').height(height);
      // $('article.small.bck').width(width - 2);
      // $('article.small.bck').height(height - 2);
      // $('.thumb-work-isotope h2 a').width(width);
      // $('.thumb-work-isotope h2 a').height(height);

      width = $('article.big').width();
      if ($(window).width() > 991) {
        height = height * 2;
      } else {
        height = Math.floor(width * 0.5625);
      }
      $('article.big').height(height);

      // $('article.big.bck').width(width - 2);
      // $('article.big.bck').height(height - 2);
      // $('.thumb-work-isotope-large h2 a').width(width);
      // $('.thumb-work-isotope-large h2 a').height(height);

      width = $('article.vertical').width();
      height = Math.floor(width * 1.265);
      height = Math.floor((width * 1.125) + 101);
      // $('article.vertical.bck').width(width - 2);
      // $('article.vertical.bck').height(height - 2);
      // $('.thumb-work-isotope-medium h2 a').width(width);
      // $('.thumb-work-isotope-medium h2 a').height(height);
      // if ($(window).width() > 1641) {
      //   height = Math.floor((width * 1.125) + 101); //1.265

      // } else {
      //   height = Math.floor((width * 1.125)+ 101);
      // }
      $('article.vertical').height(height);

      var widthBrand = $('.grid').width();
      $('.brand').width(widthBrand);

    }
    $(window).load(function () {
      thumbAutoSize();
      var $grid = $('.grid').packery({
        itemSelector: 'article',
        columnWidth: '.grid-sizer',
        percentPosition: true,

      });
      $grid.imagesLoaded({ background: '.bck' }).progress(function () {

        $grid.packery();
      })
    });
    $(window).resize(function () {

      thumbAutoSize();

    });
  },
};
