<div class="header_container">
    <header>
        <div class="top_bar clear">
            <ul class="top_links">
                @if ( ! is_login() )
                <li>{{HTML::link('member', 'Login')}}</li>
                <li class="highlight"><a href="{{url('member/create')}}" >Sign Up</a></li>
                @else
                <li>{{HTML::link('member', 'My Account')}}</li>
                <li class="highlight">{{HTML::link('logout', 'Logout')}}</li>
                @endif
            </ul>
        </div>
        @if( logo_image_url() )
        <h1 class="logo">
            <a href="{{url('home')}}">
                {{HTML::image(logo_image_url(),'Logo',array("class"=>"gbr-logo"))}}
            </a>
        </h1>
        @else
        <h1 class="logo">
            <a href="{{url('home')}}" class="logo-text">
                <h1 id="brandshop">{{ Theme::place('title') }}</h1>
            </a>
        </h1>
        @endif

        <div class="responsive-nav mobile-navigation">
            <select onchange="if(this.options[this.selectedIndex].value != ''){window.top.location.href=this.options[this.selectedIndex].value}">
                <option selected="" value="">Menu...</option>
                @if(count(category_menu()) > 0)
                    @foreach(category_menu() as $link)
                        @if($link->parent == 0)
                        <option value="{{category_url($link)}}"> {{$link->nama}}</option>
                            @if(count($link->anak) > 0)
                            @foreach($link->anak as $submenu)
                                @if($submenu->parent == $link->id)
                                <option value="{{category_url($submenu)}}" id="submenu"> {{$submenu->nama}}</option>
                                    @if(count($submenu->anak) > 0)
                                    @foreach($submenu->anak as $submenu2)
                                        @if($submenu->id == $submenu2->parent)        
                                        <option value="{{category_url($submenu2)}}" id="submenu2"> {{$submenu2->nama}}</option>
                                        @endif
                                    @endforeach
                                    @endif
                                @endif
                            @endforeach
                            @endif
                        @endif
                    @endforeach
                @endif
            </select>
        </div>
        <div class="w100">
            <form action="{{url('search')}}" class="header_search" method="post">
                <div class="form-search">
                    <input id="search" type="text" name="search" class="input-text" autocomplete="off" placeholder="Search" required>
                    <button type="submit" title="Search"></button>
                </div>
            </form>
        </div>
    </header>
</div>
<div class="navigation_container">
    <nav class="side-nav">
        <ul class="primary_nav">
            <li class="active"><a href='{{url("/")}}'>Home</a></li>
            @if(count(category_menu()) > 0)
            @foreach(category_menu() as $key=>$menu)
            <li>
                @if($menu->parent=='0')
                <a href="{{category_url($menu)}}">{{$menu->nama}}</a>
                    @if(count($menu->anak) >= 1)
                    <ul class="sub_menu">
                        @foreach($menu->anak as $key1=>$submenu)
                            @if($submenu->parent == $menu->id)
                            <li>
                                <a href="{{ category_url($submenu) }}">{{ $submenu->nama }}</a>
                                @if(count($submenu->anak) >= 1)
                                    <ul>
                                    @foreach($submenu->anak as $key2=>$submenu2)
                                        @if($submenu->id == $submenu2->parent)        
                                        <li><a href="{{ category_url($submenu2) }}">{{ $submenu2->nama }}</a></li>
                                        @endif
                                    @endforeach
                                    </ul>
                                @endif
                            </li>
                            @endif
                        @endforeach
                    </ul>
                    @endif
                @endif
            </li>
            @endforeach
            @endif
        </ul>
        <div class="minicart" id="shoppingcartplace">
            {{shopping_cart()}}
        </div>
    </nav>
</div>