@extends('front.layouts.app')
@section('title',__('Log In'))
@section('head')
    <div class="xt-page-title-area">
        <div class="xt-page-title">
            <div class="container"><h1 class="entry-title">{{__('Log In')}}</h1></div>
        </div>
        <div class="xt-breadcrumb-wrapper">
            <div class="container">
                <nav class="xt-breadcrumb" dir="ltr">
                    <ul>
                        <li>
                            <a href="{{url('/')}}" itemprop="url"><span itemprop="title">{{__('Home')}}</span></a>
                        </li>
                        <li class="current">{{__('Log In')}}</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection
@section('content')
    <div class="site-content-inner container">
        <div class="theme-main-content-inner row justify-content-center">
            <div id="primary" class="content-area reptro-login-register-page-content-area col-lg-5 col-md-10">
                <main id="main" class="site-main">
                    <article id="post-5" class="post-5 page type-page status-publish hentry">
                        <div class="entry-content">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif
                            <div class="tml tml-login">
                                <form action="{{url('login')}}" method="post">
                                    @csrf
                                    @method('POST')
                                    <div class="tml-field-wrap tml-log-wrap">
                                        <label class="tml-label" for="email">{{__('Email Address')}}</label>
                                        <input name="email" type="email" id="email" autocapitalize="off" class="tml-field" />
                                    </div>
                                    <div class="tml-field-wrap tml-pwd-wrap">
                                        <label class="tml-label" for="password">{{__('Password')}}</label>
                                        <input name="password" type="password" id="password" class="tml-field" /></div>
                                    <div class="tml-field-wrap tml-rememberme-wrap">
                                        <input name="remember" type="checkbox" value="1" id="remember" class="tml-checkbox" />
                                        <label class="tml-label" for="remember">{{__('Remember Me')}}</label>
                                    </div>
                                    <div class="tml-field-wrap tml-submit-wrap">
                                        <button type="submit" class="tml-button">{{__('Log In')}}</button>
                                    </div>
                                </form>
                                <ul class="tml-links">
                                    <li class="tml-lostpassword-link"><a href="{{url('reset')}}">{{__('Lost your password?')}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>
@endsection
