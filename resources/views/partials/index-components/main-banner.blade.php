
@php
$cars = [
    [
        'title' => '网站建设',
        'desc' => '营销型及品牌型网站建设',
        'icon' => 'icon-desktop',
        'name' => 'build'
    ],[
        'title' => '网站优化',
        'desc' => '网站结构、排版、代码优化',
        'icon' => 'icon-settings',
        'name' => 'optimization'
    ],[
        'title' => '大数据分析',
        'desc' => '依托大数据，发掘价值信息',
        'icon' => 'icon-Analytics',
        'name' => 'analysis'

    ],[
        'title' => 'SEO营销',
        'desc' => '全网推广，海量大词上首页',
        'icon' => 'icon-target',
        'name' => 'seo'
    ]
]
@endphp
<section class="main-banner">
    <div class="main-banner-content">
        <div class="container">
            <ul class="nav nav-tabs main-banner-tabs" id="myTab" role="tablist">
                @foreach ($cars as $item)
                    <li class="nav-item">
                        <a class="nav-link {{ $loop->first ? 'active': ''}}" 
                            id="home-tab-{{$loop->index}}" 
                            data-toggle="tab" 
                            href="#home-nav-{{$loop->index}}" 
                            role="tab" 
                            aria-controls="home-nav-{{$loop->index}}" 
                        aria-selected="true">
                            <div>
                                <i class="iconfont {{$item['icon']}}"></i>
                                <p><b>{{$item['title']}}</b></p>
                                <p class="tab-desc">{{$item['desc']}}</p>
                            </div>
                        </a>
                    </li>  
                @endforeach
            </ul>
        </div>
        <div class="tab-content" id="myTabContent">
            @foreach ($cars as $item)
                <div class="tab-pane container main-banner-pannel fade {{ $loop->first ? 'show active': ''}}" 
                    id="home-nav-{{$loop->index}}" 
                    role="tabpanel" 
                    aria-labelledby="home-tab-{{$loop->index}}">
                    @includeWhen($item['name'] == 'build', 'partials.index-components.build')
                    @includeWhen($item['name'] == 'optimization', 'partials.index-components.optimization')
                    @includeWhen($item['name'] == 'analysis', 'partials.index-components.analysis')
                    @includeWhen($item['name'] == 'seo', 'partials.index-components.seo')
                </div>
            @endforeach
        </div>
    </div>
</section>