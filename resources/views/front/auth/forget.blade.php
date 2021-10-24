@extends('front.layouts.app')
@section('title', 'Login')
@section('description', 'description')
@section('keywords', 'keywords')
@section('head')
    <div class="xt-page-title-area">
        <div class="xt-page-title">
            <div class="container"><h1 class="entry-title">Log In</h1></div>
        </div>
        <div class="xt-breadcrumb-wrapper">
            <div class="container">
                <nav class="xt-breadcrumb" dir="ltr">
                    <ul>
                        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a href="https://reptro.xoothemes.com/" itemprop="url"><span itemprop="title">Home</span></a>
                        </li>
                        <li class="current">Log In</li>
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
                    <article id="post-8" class="post-8 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="tml tml-lostpassword">
                                <div class="tml-alerts"></div>
                                <form name="lostpassword" action="https://reptro.xoothemes.com/lostpassword/" method="post" data-ajax="1">
                                    <div class="tml-field-wrap tml-user_login-wrap">
                                        <label class="tml-label" for="user_login">Username or Email Address</label> <input name="user_login" type="text" value="" id="user_login" autocapitalize="off" class="tml-field" />
                                    </div>
                                    <div class="tml-field-wrap tml-submit-wrap"><button name="submit" type="submit" class="tml-button">Get New Password</button></div>
                                    <input name="redirect_to" type="hidden" value="" />
                                </form>
                                <ul class="tml-links">
                                    <li class="tml-login-link"><a href="https://reptro.xoothemes.com/login/">Log in</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>
@endsection
