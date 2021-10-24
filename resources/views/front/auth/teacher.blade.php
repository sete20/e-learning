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
                    <article id="post-5" class="post-5 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="tml tml-login">
                                <div class="tml-alerts"></div>
                                <form name="login" action="https://reptro.xoothemes.com/login/" method="post" data-ajax="1">
                                    <div class="tml-field-wrap tml-log-wrap">
                                        <label class="tml-label" for="user_login">Username or Email Address</label> <input name="log" type="text" value="" id="user_login" autocapitalize="off" class="tml-field" />
                                    </div>
                                    <div class="tml-field-wrap tml-pwd-wrap"><label class="tml-label" for="user_pass">Password</label> <input name="pwd" type="password" value="" id="user_pass" class="tml-field" /></div>
                                    <div class="tml-field-wrap tml-rememberme-wrap">
                                        <input name="rememberme" type="checkbox" value="forever" id="rememberme" class="tml-checkbox" /> <label class="tml-label" for="rememberme">Remember Me</label>
                                    </div>
                                    <div class="tml-field-wrap tml-submit-wrap"><button name="submit" type="submit" class="tml-button">Log In</button></div>
                                    <input name="redirect_to" type="hidden" value="https://reptro.xoothemes.com/wp-admin/" /> <input name="testcookie" type="hidden" value="1" />
                                </form>
                                <ul class="tml-links">
                                    <li class="tml-lostpassword-link"><a href="https://reptro.xoothemes.com/lostpassword/">Lost your password?</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>
@endsection
