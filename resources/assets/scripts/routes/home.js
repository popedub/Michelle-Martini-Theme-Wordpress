export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    $(document).ready(function () {
      $('.gallery-home').slick({
        arrows: false,
        autoplay: true,
      });
    });
  },
};
