import throttle from "lodash/throttle";
export default {
  init() {
    let $scrollTop = $(".J-right-toolbar .scroll-top");
    let $window = $(window);

    // 回到顶部
    $window.on('scroll',throttle(()=>{
      let offsetTop = $window.scrollTop();
      if(offsetTop > 400){
        $scrollTop.fadeIn(300);
      }else{
        $scrollTop.fadeOut(300);
      }
    },200,{
      trailing: true
    }))
    $scrollTop.on('click',()=>{
      $('body,html').animate({scrollTop: 0}, 800);
    })
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
