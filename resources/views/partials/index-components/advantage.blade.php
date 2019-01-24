
@php
$advantage = [
    [
        'title' => '精准分析',
        'desc' => '权威数据分析挖掘',
        'icon' => 'icon-target'
    ],[
        'title' => '先效果后付费',
        'desc' => '效果说话杜绝烂尾项目',
        'icon' => 'icon-propertysafety'
    ],[
        'title' => '海量大词',
        'desc' => '海量大词上首页',
        'icon' => 'icon-deploymentunit'
    ],[
        'title' => '合规技术',
        'desc' => '纯白技术稳定安全',
        'icon' => 'icon-huizhangubadge'
    ],[
        'title' => '优质服务',
        'desc' => '坚持不懈的服务与跟踪',
        'icon' => 'icon-heart'
    ],[
        'title' => '全网推广',
        'desc' => '覆盖更多搜索人群',
        'icon' => 'icon-radarchart'
    ]
]
@endphp

<section class="main-advantage">
    <div class="container">
        <h3 class="section-title text-center">我们的优势</h3>
        <div class="row">
            @foreach ($advantage as $item)
                <div class="col-lg-4 col-md-6 align-self-center">
                    <div class="media advantage-box">
                        <div class="mr-3 ml-1"><i class="box-icon iconfont {{$item['icon']}}"></i></div>
                        <div class="media-body">
                            <p class="item-title">{{$item['title']}}</p>
                            <p>{{$item['desc']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>