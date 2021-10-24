<header id="masthead" class="site-header-type-default xt-header site-header navbar navbar-default xt-navbar xt-head-2">
    <!-- TOP HEADER -->
    <div class="xt-header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="xt-pre-header-left-content">
                        <span class="xt-business-hour"><i class="sli-clock"></i> {{setting('contact.hours')}}</span>
                        <span class="xt-business-email"><a href="mailto:{{setting('contact.email')}}">{{setting('contact.email')}}</a> <i class="sli-paper-plane"></i></span>
                        <span class="xt-business-phone" dir="ltr"> <a href="tel:{{setting('contact.phone')}}">{{setting('contact.phone')}}</a> <i class="sli-phone"></i></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="header-social text-right">
                        <ul>
                            @foreach(social() as $item)
                                <li>
                                    <a href="{{$item->url}}" target="_blank"><i class="fa fa-{{$item->name}}"></i></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MAIN DESKTOP HEADER -->
    <div class="xt-main-nav">
        <nav class="navbar nav-scroll xt-home-2 show-header-btn-1 header-btn-type-login_or_profile">
            <div class="container">
                <div class="xt-main-navbar-inner">
                    <div class="xt-navbar-menu-and-logo">
                        <div class="xt-navbar-menu-and-logo-inner">
                            <!-- SITE LOGO -->
                            <div class="logo-wrapper" itemscope itemtype="http://schema.org/Brand">
                                <a href="{{url('/')}}" class="custom-logo-link" rel="home">
                                    <img
                                        width="522"
                                        height="237"
                                        src="{{url('images/logo.png')}}"
                                        class="custom-logo"
                                        alt="{{setting('site.title')}}"
                                        sizes="(max-width: 522px) 100vw, 522px"
                                    />
                                </a>
                            </div>
                            <!-- MENU -->
                            <div class="xt-navbar-main-menu">
                                <ul id="navbar-nav" class="nav-menu nav navbar-nav navbar-right">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                        <a title="{{__('Contact')}}" href="{{url('contact')}}" class="dropdown-toggle" aria-haspopup="true">{{__('Contact')}}</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                        <a title="{{__('Events')}}" href="{{url('events')}}" class="dropdown-toggle" aria-haspopup="true">{{__('Events')}}</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                        <a title="{{__('FAQ')}}" href="{{url('faq')}}" class="dropdown-toggle" aria-haspopup="true">{{__('FAQ')}}</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                        <a title="{{__('Materials')}}" href="{{url('courses')}}" class="dropdown-toggle" aria-haspopup="true">{{__('Materials')}}</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                        <a title="{{__('Blog')}}" href="{{url('blog')}}" class="dropdown-toggle" aria-haspopup="true">{{__('Blog')}}</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                        <a title="{{__('Gallery')}}" href="{{url('gallery')}}" class="dropdown-toggle" aria-haspopup="true">{{__('Gallery')}}</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                        <a title="{{__('About')}}" href="{{url('about')}}" class="dropdown-toggle" aria-haspopup="true">{{__('About')}}</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item">
                                        <a title="{{__('Home')}}" href="{{url('/')}}" class="dropdown-toggle" aria-haspopup="true">{{__('Home')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="xt-navbar-side text-right">
                        @if(auth('users')->user())
                            <div class="reptro-header-profile-img"><a class="btn btn-lg btn-fill" href="{{url('users')}}">{{__('Dashboard')}}</a></div>
                        @elseif(auth('teacher')->user())
                            <div class="reptro-header-profile-img"><a class="btn btn-lg btn-fill" href="{{url('teacher')}}">{{__('Dashboard')}}</a></div>
                        @else
                            <div class="reptro-header-profile-img"><a class="btn btn-lg btn-fill" href="{{url('login')}}">{{__('Login')}}</a></div>
                        @endif

                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- MAIN MOBILE HEADER -->
    <div class="reptro-mobile-menu menu-spacing nav-scroll xt-header-type-without_background" data-direction="">
        <div class="mobile-menu-area">
            <div class="logo-wrapper" itemscope itemtype="http://schema.org/Brand">
                <a href="{{url('/')}}" class="custom-logo-link" rel="home">
                    <img
                        width="522"
                        height="237"
                        src="{{url('images/logo.png')}}"
                        class="custom-logo"
                        alt="{{setting('site.title')}}"
                        sizes="(max-width: 522px) 100vw, 522px"
                    />
                </a>
            </div>
            <div class="mobile-menu clearfix">
                <nav id="mobile-menu-active" class="mobile-menu-init">
                    <ul id="reptro_mobile_menu" class="main">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5295"><a href="{{url('/')}}">{{__('Home')}}</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5295"><a href="{{url('about')}}">{{__('About')}}</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5295"><a href="{{url('gallery')}}">{{__('Gallery')}}</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5295"><a href="{{url('blog')}}">{{__('Blog')}}</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5295"><a href="{{url('courses')}}">{{__('Materials')}}</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5295"><a href="{{url('faq')}}">{{__('FAQ')}}</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5295"><a href="{{url('events')}}">{{__('Events')}}</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5295"><a href="{{url('contact')}}">{{__('Contact')}}</a></li>
                        <li><a href="{{__('Login')}}">{{__('Login')}}</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
