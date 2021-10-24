@extends('front.layouts.app')
@section('title', 'Login')
@section('description', 'description')
@section('keywords', 'keywords')
@section('head')
    <div class="xt-page-title-area">
        <div class="xt-page-title">
            <div class="container"><h1 class="entry-title">404</h1></div>
        </div>
        <div class="xt-breadcrumb-wrapper">
            <div class="container">
                <nav class="xt-breadcrumb">
                    <ul>
                        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a href="https://reptro.xoothemes.com/" itemprop="url"><span itemprop="title">Home</span></a>
                        </li>
                        <li class="current">404 Nothing Found</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="site-content-inner container">
        <div class="theme-main-content-inner row justify-content-center">
            <div id="primary" class="content-area col-lg-10">
                <main id="main" class="site-main">
                    <section class="error-404 not-found">
                        <header class="page-header text-center">
                            <h1 class="reptro-section-title text-center margin-bottom-small margin-top-none section-title-font-size-xx_large"><span>Oops! That page can’t be found.</span></h1>
                        </header>
                        <div class="page-content text-center">
                            <div class="not-found-content"><p class="section-title-small">It looks like nothing was found at this location. Maybe try one of the links below or a search?</p></div>
                            <div class="not-found-search search-inline">
                                <form role="search" method="get" class="search-form" action="https://reptro.xoothemes.com/">
                                    <label> <span class="screen-reader-text">Search for:</span> <input type="search" class="search-field" placeholder="Search …" value="" name="s" /> </label>
                                    <input type="submit" class="search-submit" value="Search" />
                                </form>
                            </div>
                            <div class="not-found-home back-top-home"><a class="btn btn-lg btn-fill" href="https://reptro.xoothemes.com">Back to Home</a></div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
@endsection
