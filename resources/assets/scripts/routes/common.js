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
    });

     let $tabwebTitle = $(".tabweb-title");
     let $tabwebBody = $(".tabweb-body");

    $tabwebTitle.each(function (index) {
      $($tabwebTitle[index]).on('click',function(){
        $tabwebBody.hide();
        $($tabwebBody[index]).show();
      })
    })
    $($tabwebTitle[0]).click();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
