@extends('front.layouts.app')
@section('title',$course->name)
@section('description',Strip_tags($course->description))
@section('keywords',Strip_tags($course->description))
@section('head')
    <div class="xt-page-title-area">
        <div class="xt-page-title">
            <div class="container"><h1 class="entry-title">{{$course->name}}</h1></div>
        </div>
        <div class="xt-breadcrumb-wrapper">
            <div class="container">
                <nav class="learn-press-breadcrumb" itemprop="breadcrumb">
                    <a href="{{url('/')}}">{{__('Home')}}</a><i class="fa fa-caret-right" aria-hidden="true"></i>
                    <a href="{{url('courses')}}">{{__('All Courses')}}</a><i class="fa fa-caret-right" aria-hidden="true"></i>
                    <a href="{{url('courses/category/' . $course->material_id)}}">{{\App\Models\Material::find($course->material_id)->name}}</a><i class="fa fa-caret-right" aria-hidden="true"></i>
                    {{$course->name}}
                </nav>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="site-content-inner container" style="margin-top: 50px;">
        <div class="theme-main-content-inner">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <article id="post-4265" class="xt-single-course-item post-4265 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-academic course_category-diploma course">
                        <div id="lp-single-course" class="lp-single-course">
                            <div id="learn-press-course" class="course-summary">
                                <div class="course-landing-summary">
                                    <div class="xt-single-course-header clearfix">
                                        <h1 itemprop="name" class="course-title entry-title">{{$course->name}}</h1>
                                        <div class="course-meta">
                                            <div class="course-author" itemscope="" itemtype="http://schema.org/Person">

                                                <div class="author-contain">
                                                    <label itemprop="jobTitle">{{__('Teacher')}}</label>
                                                    <div class="value" itemprop="name"><a href="#">{{\App\Models\Teacher::find($course->teacher_id)->name}}</a></div>
                                                </div>
                                            </div>
                                            <div class="course-categories">
                                                <label>{{__('Material')}}</label>
                                                <div class="value">
                                                    <span class="cat-links"> <a href="#">{{\App\Models\Material::find($course->material_id)->name}}</a> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-payment">
                                            <div class="course-price">
                                                @if($course->discount)
                                                    <span class="origin-price">{{$course->price}}{{setting('admin.$')}}</span>
                                                    <span class="price">{{$course->price - $course->discount}}{{setting('admin.$')}}</span>
                                                @else
                                                    <span class="price">{{$course->price}}{{setting('admin.$')}}</span>
                                                @endif
                                            </div>
                                        </div><br>
                                        <div class="lp-course-buttons">
                                            <form name="purchase-course" class="purchase-course" method="post" enctype="multipart/form-data">
                                                <button class="rp-button button button-purchase-course ">{{__('Add To Cart')}}</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="course-thumbnail">
                                        <a href="{{url($course->image)}}" itemprop="image" class="learn-press-single-thumbnail" title="">
                                            <img
                                                width="1200"
                                                height="560"
                                                src="{{url($course->image)}}"
                                                class="attachment-reptro-blog-thumb size-reptro-blog-thumb wp-post-image"
                                                alt="nicolas-thomas-540353-unsplash copy"
                                                title="nicolas-thomas-540353-unsplash copy"
                                            />
                                        </a>
                                    </div>
                                    <div id="learn-press-course-tabs" class="course-tabs">
                                        <ul class="learn-press-nav-tabs course-nav-tabs">
                                            <li class="course-nav course-nav-tab-overview active default"><a href="#" data-tab="#tab-overview">{{__('Overview')}}</a></li>
                                        </ul>
                                        <div class="course-tab-panel-overview course-tab-panel active" id="tab-overview">
                                            <div class="course-description" id="learn-press-course-description">
                                                {!! $course->description !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>

@endsection
