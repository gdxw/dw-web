import "slick-carousel";
export default {
  init() {
    $('.slick-case').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      nextArrow: '<a class="slick-next slick-control-next"><i class="iconfont icon-right"></i></a>',
      prevArrow: '<a class="slick-prev slick-control-prev"><i class="iconfont icon-left"></i></a>'
    });
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
