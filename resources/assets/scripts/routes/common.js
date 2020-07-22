export default {
  init() {
    // JavaScript to be fired on all pages
    var btn = document.getElementById('menu');
    var close = document.getElementById('closeMenu');
    $(document).ready(function () {
      btn.addEventListener('click', function () {
        $('.overlay-slidedown').toggleClass('open');
      })

      close.addEventListener('click', function () {
        $('.overlay-slidedown').toggleClass('open');
      })
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
