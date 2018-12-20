<footer class="content-info footer">
  <div class="container">
    <div class="friend-link">
        <div class="media">
          <b class="mr-3">友情链接：</b>
          <div class="media-body">
            <div class="d-flex flex-wrap">
              <a href="#">云搜网站建设</a>
              <a href="#">云搜网站建设</a>
              <a href="#">云搜网站建设</a>
              <a href="#">云搜网站建设</a>
              <a href="#">云搜网站建设</a>
              <a href="#">云搜网站建设</a>
              <a href="#">云搜网站建设</a>
              <a href="#">云搜网站建设</a>
              <a href="#">云搜网站建设</a>
              <a href="#">云搜网站建设</a>
              <a href="#">云搜网站建设</a>
              <a href="#">云搜网站建设</a>
              <a href="#">云搜网站建设</a>
              <a href="#">云搜网站建设</a>
            </div>
          </div>
        </div>
    </div>
    
    <div class="footer-menu">
        @if (has_nav_menu('footer_navigation'))
          {!! wp_nav_menu([
            'theme_location' => 'footer_navigation', 
            'menu_class' => 'row footer-nav',
            'container' => false
          ]) !!}
        @endif
    </div>
    <div class="footer-sidebar row">
        @php dynamic_sidebar('sidebar-footer') @endphp
    </div>
    <div class="line-border"></div>
    <div class="footer-share">
      <ul class="bdsharebuttonbox list-unstyled">
        <li><a title="分享到新浪微博" class="iconfont icon-weibo" data-cmd="tsina" href="javascript:;"></a></li>
        <li><a title="分享到QQ" class="iconfont icon-QQ" data-cmd="sqq" href="javascript:;"></a></li>
        <li><a title="分享到微信" class="iconfont icon-wechat-fill" data-cmd="weixin" href="javascript:;"></a></li>
        <li><a title="分享到QQ空间" class="iconfont icon-kongjian" data-cmd="qzone" href="javascript:;"></a></li>
        <li><a title="分享到Facebook" class="iconfont icon-facebook-fill" data-cmd="fbook" href="javascript:;"></a></li>
        <li><a title="分享到Twitter" class="iconfont icon-twitter" data-cmd="twi" href="javascript:;"></a></li>
        <li><a title="分享到邮件" class="iconfont icon-mail-fill" data-cmd="mail" href="javascript:;"></a></li>
      </ul>
      <script>
        window._bd_share_config = {
          "common": {
            "bdSnsKey": {},
            "bdText": "",
            "bdMini": "2",
            "bdMiniList": false,
            "bdPic": ".",
            "bdStyle": "1",
            "bdSize": "16"
            },
            "share": {
              "bdSize": 16,
              "bdCustomStyle": ''
            }
        }
        with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
      </script>
    </div>
    <div class="copyright-info text-center">
      <p>© 2018 佛山市云搜网络科技有限公司 版权所有 粤ICP备88888888号-1</p>
    </div>
  </div>
</footer>
@push('scripts')
    <script src="/example.js"></script>
@endpush