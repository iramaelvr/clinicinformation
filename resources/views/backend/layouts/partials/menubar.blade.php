<!-- BEGIN MENUBAR-->
<style>
    .reg a{
        font-family: 'Times New Roman';
      
        margin-left: 30px;
    }
    .reglabel{
        font-size: 20px;
    }
    .sidecolor{
        background-color: #9BC3E1;
        width: 400px;
        color: #333;

        font-size: 20px;
    }
    .sidecolor li:hover{
        background-color: white;
        
        color: white;

        font-size: 20px;
    }
    .sidecolor li:active{
        
        color: white;

        font-size: 20px;
    }
    .titles{
        font-family: 'Times New Roman';
        font-size: 20px;
        margin-left: 30px;
    }
</style>
<div id="menubar" class="menubar-inverse animate sidecolor">
    <div class="menubar-fixed-panel sidecolor">
        <div>
            <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="expanded">
            <a href="{{ url('/') }}">
                <span class="text-lg text-bold text-primary text-uppercase">{{ config('app.name') }}</span>
            </a>
        </div>
    </div>
    <div class="menubar-scroll-panel sidecolor">
        <!-- BEGIN MAIN MENU -->
        <ul id="main-menu" class="gui-controls">
            @foreach($allMenu as $menu)
                <li class="menu {{ $menu['class'] ?: '' }}">
                    <a href="{{ $menu['route'] }}">
                        @if(isset($menu['icon']))
                            {{-- <div class="gui-icon">
                                <i class="{{ $menu['icon'] }}"></i>
                            </div> --}}
                        @else
                            <div class="gui-text">
                               {{ $menu['text'] }}
                            </div>
                        @endif
                        <span class="titles fontstyless">{{ $menu['title'] }}</span>
                        
                    </a>
                    
                    @if(isset($menu['items']))
                  
                        <ul>
                            @foreach($menu['items'] as $item)
                                @if(isset($item['items']))
                                    <li class="gui-folder">
                                        <a href="javascript:void(0);">
                                            <span class="title sub">{{ $item['title'] }}</span>
                                        </a>
                                        <ul>
                                            @foreach($item['items'] as $subItem)
                                                <li>
                                                    <a href="{{ $subItem['route'] }}">
                                                        <!-- <span class="title">{{ $subItem['title'] }}</span> -->
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li class="sub-menu">
                                        <a href="{{ $item['route'] }}">
                                            <span class="title sub"><a href="">{{ $item['description'] }}</a></span>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                </li>
                
            @endforeach
           
        </ul><!--end .main-menu -->
        <!-- END MAIN MENU -->
        <div class="menubar-foot-panel">
          
        </div>
    </div><!--end .menubar-scroll-panel-->
</div><!--end #menubar-->
<!-- END MENUBAR -->
