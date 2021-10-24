@extends('front.layouts.app')
@section('title', __('Home'))

@if(setting('home.option') === '1')
@section('content')
    <!-- Slider -->
    <section
        class="elementor-element elementor-element-e9d6b58 xt_row_primary_bg_color_white xt_row_primary_bg_color_white_yes elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large reptro_section_top_bottom_padding_no elementor-section elementor-top-section"
        data-id="e9d6b58"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
    >
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-extended">
            <div class="elementor-row" dir="ltr">
                <div class="elementor-element elementor-element-5d41cb7 elementor-column elementor-col-33 elementor-top-column" data-id="5d41cb7" data-element_type="column">
                    <div class="elementor-column-wrap"><div class="elementor-widget-wrap"></div></div>
                </div>
                <div class="elementor-element elementor-element-ddf67c7 elementor-column elementor-col-33 elementor-top-column" data-id="ddf67c7" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-c4992d2 elementor-widget elementor-widget-reptro_section_title"
                                data-id="c4992d2"
                                data-element_type="widget"
                                data-widget_type="reptro_section_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2
                                        class="reptro-section-title text-center margin-bottom-small section-title-type-default margin-top-none section-title-font-size-xx_large section-title-color-default"
                                    >
                                        <span>Browse Courses by Categories</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-fd46b08 elementor-widget elementor-widget-text-editor"
                                data-id="fd46b08"
                                data-element_type="widget"
                                data-widget_type="text-editor.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p style="text-align: center;">
                                            Our company is the only in the industry that can boast<br />
                                            a 100% satisfaction rating and that’s because we always put you first.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-c5c2a7f elementor-widget elementor-widget-reptro_course_categories"
                                data-id="c5c2a7f"
                                data-element_type="widget"
                                data-widget_type="reptro_course_categories.default"
                            >
                                <div class="elementor-widget-container">
                                    <div
                                        class="reptro-course-category-wrapper reptro-course-category-img-type-icon reptro-course-category-slider reptro-course-category-icon-yes owl-carousel owl-theme"
                                        data-autoplay="true"
                                        data-loop="true"
                                        data-items="4"
                                        data-desktopsmall="4"
                                        data-tablet="2"
                                        data-mobile="1"
                                        data-navigation="true"
                                        data-pagination="false"
                                        data-direction="false"
                                    >
                                        <div class="reptro-course-category-item">
                                            <div class="reptro-course-item-inner">
                                                <a href="https://reptro.xoothemes.com/course-category/academic/">
                                                    <img
                                                        width="512"
                                                        height="512"
                                                        src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/teacher-pointing-blackboard-1.png"
                                                        class="attachment-full size-full"
                                                        alt=""
                                                        srcset="
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/teacher-pointing-blackboard-1.png         512w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/teacher-pointing-blackboard-1-300x300.png 300w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/teacher-pointing-blackboard-1-150x150.png 150w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/teacher-pointing-blackboard-1-400x400.png 400w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/teacher-pointing-blackboard-1-140x140.png 140w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/teacher-pointing-blackboard-1-350x350.png 350w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/teacher-pointing-blackboard-1-100x100.png 100w
                                                                                                        "
                                                        sizes="(max-width: 512px) 100vw, 512px"
                                                    />
                                                    <h4>Academic</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="reptro-course-category-item">
                                            <div class="reptro-course-item-inner">
                                                <a href="https://reptro.xoothemes.com/course-category/diploma/">
                                                    <img
                                                        width="512"
                                                        height="512"
                                                        src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/certificate-2.png"
                                                        class="attachment-full size-full"
                                                        alt=""
                                                        srcset="
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/certificate-2.png         512w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/certificate-2-300x300.png 300w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/certificate-2-150x150.png 150w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/certificate-2-400x400.png 400w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/certificate-2-140x140.png 140w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/certificate-2-350x350.png 350w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/certificate-2-100x100.png 100w
                                                                                                        "
                                                        sizes="(max-width: 512px) 100vw, 512px"
                                                    />
                                                    <h4>Diploma</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="reptro-course-category-item">
                                            <div class="reptro-course-item-inner">
                                                <a href="https://reptro.xoothemes.com/course-category/extracurricular/">
                                                    <img
                                                        width="512"
                                                        height="512"
                                                        src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/artificial-intelligence-1.png"
                                                        class="attachment-full size-full"
                                                        alt=""
                                                        srcset="
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/artificial-intelligence-1.png         512w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/artificial-intelligence-1-300x300.png 300w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/artificial-intelligence-1-150x150.png 150w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/artificial-intelligence-1-400x400.png 400w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/artificial-intelligence-1-140x140.png 140w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/artificial-intelligence-1-350x350.png 350w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/artificial-intelligence-1-100x100.png 100w
                                                                                                        "
                                                        sizes="(max-width: 512px) 100vw, 512px"
                                                    />
                                                    <h4>Extracurricular</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="reptro-course-category-item">
                                            <div class="reptro-course-item-inner">
                                                <a href="https://reptro.xoothemes.com/course-category/short-courses/">
                                                    <img
                                                        width="512"
                                                        height="512"
                                                        src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/write-board-1.png"
                                                        class="attachment-full size-full"
                                                        alt=""
                                                        srcset="
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/write-board-1.png         512w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/write-board-1-300x300.png 300w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/write-board-1-150x150.png 150w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/write-board-1-400x400.png 400w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/write-board-1-140x140.png 140w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/write-board-1-350x350.png 350w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/write-board-1-100x100.png 100w
                                                                                                        "
                                                        sizes="(max-width: 512px) 100vw, 512px"
                                                    />
                                                    <h4>Short Courses</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="reptro-course-category-item">
                                            <div class="reptro-course-item-inner">
                                                <a href="https://reptro.xoothemes.com/course-category/technical-skill/">
                                                    <img
                                                        width="512"
                                                        height="512"
                                                        src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/technical-support-1.png"
                                                        class="attachment-full size-full"
                                                        alt=""
                                                        srcset="
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/technical-support-1.png         512w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/technical-support-1-300x300.png 300w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/technical-support-1-150x150.png 150w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/technical-support-1-400x400.png 400w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/technical-support-1-140x140.png 140w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/technical-support-1-350x350.png 350w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/technical-support-1-100x100.png 100w
                                                                                                        "
                                                        sizes="(max-width: 512px) 100vw, 512px"
                                                    />
                                                    <h4>Technical Skill</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-7728176 elementor-column elementor-col-33 elementor-top-column" data-id="7728176" data-element_type="column">
                    <div class="elementor-column-wrap"><div class="elementor-widget-wrap"></div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section
        class="elementor-element elementor-element-3d29aef elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large elementor-section elementor-top-section"
        data-id="3d29aef"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-58dbdc74 elementor-column elementor-col-100 elementor-top-column" data-id="58dbdc74" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-87f5aa4 elementor-widget elementor-widget-reptro_section_sub_title"
                                data-id="87f5aa4"
                                data-element_type="widget"
                                data-widget_type="reptro_section_sub_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <p
                                        class="section-title-small text-center margin-bottom-none margin-top-none section-title-small-font-default section-title-small-border-no section-title-small-color-default"
                                    >
                                        <span>Welecome To Reptro University.</span>
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-6b5f7dd1 elementor-widget elementor-widget-reptro_section_title"
                                data-id="6b5f7dd1"
                                data-element_type="widget"
                                data-widget_type="reptro_section_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2
                                        class="reptro-section-title text-center margin-bottom-medium section-title-type-border margin-top-none section-title-font-size-default section-title-color-default"
                                    >
                                        <span>Endless Opportunities</span>
                                    </h2>
                                </div>
                            </div>
                            <section
                                class="elementor-element elementor-element-5ca22428 elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large reptro_section_top_bottom_padding_no elementor-section elementor-inner-section"
                                data-id="5ca22428"
                                data-element_type="section"
                            >
                                <div class="elementor-container elementor-column-gap-extended">
                                    <div class="elementor-row">
                                        <div
                                            class="elementor-element elementor-element-51efc6e9 elementor-column elementor-col-25 elementor-inner-column"
                                            data-id="51efc6e9"
                                            data-element_type="column"
                                        >
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div
                                                        class="elementor-element elementor-element-530acc16 elementor-widget elementor-widget-reptro_service_item"
                                                        data-id="530acc16"
                                                        data-element_type="widget"
                                                        data-widget_type="reptro_service_item.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="reptro-service-item xt-smooth-shadow">
                                                                <div class="reptro-service-item-inner">
                                                                    <img src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/about-4-1-768x512.jpg" alt="" />
                                                                    <div class="reptro-service-item-content">
                                                                        <h3>Online Quiz</h3>
                                                                        <hr class="title-hr" />
                                                                        <p>Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-249ab82c elementor-column elementor-col-25 elementor-inner-column"
                                            data-id="249ab82c"
                                            data-element_type="column"
                                        >
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div
                                                        class="elementor-element elementor-element-4cfecf60 elementor-widget elementor-widget-reptro_service_item"
                                                        data-id="4cfecf60"
                                                        data-element_type="widget"
                                                        data-widget_type="reptro_service_item.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="reptro-service-item xt-smooth-shadow">
                                                                <div class="reptro-service-item-inner">
                                                                    <img src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/gallery-5-1-768x512.jpg" alt="" />
                                                                    <div class="reptro-service-item-content">
                                                                        <h3>Students Forum</h3>
                                                                        <hr class="title-hr" />
                                                                        <p>Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-565247c9 elementor-column elementor-col-25 elementor-inner-column"
                                            data-id="565247c9"
                                            data-element_type="column"
                                        >
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div
                                                        class="elementor-element elementor-element-43e8ace5 elementor-widget elementor-widget-reptro_service_item"
                                                        data-id="43e8ace5"
                                                        data-element_type="widget"
                                                        data-widget_type="reptro_service_item.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="reptro-service-item xt-smooth-shadow">
                                                                <div class="reptro-service-item-inner">
                                                                    <img src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/about-5-1-768x512.jpg" alt="" />
                                                                    <div class="reptro-service-item-content">
                                                                        <h3>Online Courses</h3>
                                                                        <hr class="title-hr" />
                                                                        <p>Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-31a494f7 elementor-column elementor-col-25 elementor-inner-column"
                                            data-id="31a494f7"
                                            data-element_type="column"
                                        >
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div
                                                        class="elementor-element elementor-element-51893f5d elementor-widget elementor-widget-reptro_service_item"
                                                        data-id="51893f5d"
                                                        data-element_type="widget"
                                                        data-widget_type="reptro_service_item.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="reptro-service-item xt-smooth-shadow">
                                                                <div class="reptro-service-item-inner">
                                                                    <img src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/gallery-1-1-768x512.jpg" alt="" />
                                                                    <div class="reptro-service-item-content">
                                                                        <h3>Certifications</h3>
                                                                        <hr class="title-hr" />
                                                                        <p>Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counters -->
    <section
        class="elementor-element elementor-element-636cf89d xt_row_primary_bg_color_white xt_row_primary_bg_color_white_yes elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large reptro_section_top_bottom_padding_no elementor-section elementor-top-section"
        data-id="636cf89d"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-extended">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-69ab79f elementor-column elementor-col-25 elementor-top-column" data-id="69ab79f" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-770aa4c8 xt_counter_style_yes elementor-widget elementor-widget-counter"
                                data-id="770aa4c8"
                                data-element_type="widget"
                                data-widget_type="counter.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="2000" data-to-value="100" data-from-value="" data-delimiter=","></span>
                                            <span class="elementor-counter-number-suffix">%</span>
                                        </div>
                                        <div class="elementor-counter-title">Success Rate</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-32e876c6 elementor-column elementor-col-25 elementor-top-column" data-id="32e876c6" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-41b366db xt_counter_style_yes elementor-widget elementor-widget-counter"
                                data-id="41b366db"
                                data-element_type="widget"
                                data-widget_type="counter.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="2000" data-to-value="12" data-from-value="" data-delimiter=","></span>
                                            <span class="elementor-counter-number-suffix">+</span>
                                        </div>
                                        <div class="elementor-counter-title">Years of Service</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-5ffd0622 elementor-column elementor-col-25 elementor-top-column" data-id="5ffd0622" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-54e7840b xt_counter_style_yes elementor-widget elementor-widget-counter"
                                data-id="54e7840b"
                                data-element_type="widget"
                                data-widget_type="counter.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="2000" data-to-value="135" data-from-value="" data-delimiter=","></span>
                                            <span class="elementor-counter-number-suffix">k+</span>
                                        </div>
                                        <div class="elementor-counter-title">Students</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-46a7aa5b elementor-column elementor-col-25 elementor-top-column" data-id="46a7aa5b" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-2f9842bf xt_counter_style_yes elementor-widget elementor-widget-counter"
                                data-id="2f9842bf"
                                data-element_type="widget"
                                data-widget_type="counter.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="2000" data-to-value="500" data-from-value="" data-delimiter=","></span>
                                            <span class="elementor-counter-number-suffix">+</span>
                                        </div>
                                        <div class="elementor-counter-title">Courses</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Teacher -->
    <section
        class="elementor-element elementor-element-781c3247 elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large reptro_section_top_bottom_padding_no elementor-section elementor-top-section"
        data-id="781c3247"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
    >
        <div class="elementor-container elementor-column-gap-extended">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-7021125a elementor-column elementor-col-33 elementor-top-column" data-id="7021125a" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-698fb742 elementor-widget elementor-widget-image"
                                data-id="698fb742"
                                data-element_type="widget"
                                data-widget_type="image.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="elementor-image">
                                        <img
                                            width="640"
                                            height="928"
                                            src="https://reptro.xoothemes.com/wp-content/uploads/2018/05/team9-1-706x1024.jpg"
                                            class="attachment-large size-large"
                                            alt=""
                                            srcset="
                                                                                                https://reptro.xoothemes.com/wp-content/uploads/2018/05/team9-1-706x1024.jpg 706w,
                                                                                                https://reptro.xoothemes.com/wp-content/uploads/2018/05/team9-1-600x871.jpg  600w,
                                                                                                https://reptro.xoothemes.com/wp-content/uploads/2018/05/team9-1-207x300.jpg  207w,
                                                                                                https://reptro.xoothemes.com/wp-content/uploads/2018/05/team9-1-768x1114.jpg 768w,
                                                                                                https://reptro.xoothemes.com/wp-content/uploads/2018/05/team9-1.jpg          860w
                                                                                            "
                                            sizes="(max-width: 640px) 100vw, 640px"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-88c2a3 elementor-column elementor-col-66 elementor-top-column" data-id="88c2a3" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-1f56679b elementor-widget elementor-widget-reptro_section_title"
                                data-id="1f56679b"
                                data-element_type="widget"
                                data-widget_type="reptro_section_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2
                                        class="reptro-section-title text-default margin-bottom-xsmall section-title-type-default margin-top-xlarge section-title-font-size-default section-title-color-default"
                                    >
                                        <span>Our Best Instructor - Rene</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-281c9795 elementor-widget elementor-widget-reptro_section_sub_title"
                                data-id="281c9795"
                                data-element_type="widget"
                                data-widget_type="reptro_section_sub_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <p
                                        class="section-title-small text-default margin-bottom-medium margin-top-none section-title-small-font-default section-title-small-border-yes section-title-small-color-default"
                                    >
                                        <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</span>
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-2bb39d84 elementor-widget elementor-widget-reptro_fancy_list_item"
                                data-id="2bb39d84"
                                data-element_type="widget"
                                data-widget_type="reptro_fancy_list_item.default"
                            >
                                <div class="elementor-widget-container">
                                    <ul class="reptro_fancy_lists">
                                        <li><i class="fa fa-check-circle-o"></i>Aliquam tincidunt mauris eu risus.</li>
                                        <li><i class="fa fa-check-circle-o"></i>Vivamus vestibulum ntulla nec ante.</li>
                                        <li><i class="fa fa-check-circle-o"></i>Praesent placerat risus quis eros.</li>
                                        <li><i class="fa fa-check-circle-o"></i>Integer vitae libero ac risus egestas placerat.</li>
                                        <li><i class="fa fa-check-circle-o"></i>Donec quis dui at dolor tempor interdum.</li>
                                        <li><i class="fa fa-check-circle-o"></i>Donec quis dui at dolor tempor interdum.</li>
                                        <li><i class="fa fa-check-circle-o"></i>Donec quis dui at dolor tempor interdum.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses -->
    <section
        class="elementor-element elementor-element-b555eef elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large reptro_section_top_bottom_padding_no elementor-section elementor-top-section"
        data-id="b555eef"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
    >
        <div class="elementor-container elementor-column-gap-extended">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-9b763ba elementor-column elementor-col-100 elementor-top-column" data-id="9b763ba" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-3027a99 elementor-widget elementor-widget-reptro_section_title"
                                data-id="3027a99"
                                data-element_type="widget"
                                data-widget_type="reptro_section_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2
                                        class="reptro-section-title text-center margin-bottom-xsmall section-title-type-default margin-top-none section-title-font-size-default section-title-color-default"
                                    >
                                        <span>Popular Courses</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-8910510 elementor-widget elementor-widget-reptro_section_sub_title"
                                data-id="8910510"
                                data-element_type="widget"
                                data-widget_type="reptro_section_sub_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <p
                                        class="section-title-small text-center margin-bottom-medium margin-top-none section-title-small-font-default section-title-small-border-yes section-title-small-color-default"
                                    >
                                        <span>We’ve been providing the highest quality web development service.</span>
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-87c6a5a elementor-widget elementor-widget-reptro_course"
                                data-id="87c6a5a"
                                data-element_type="widget"
                                data-widget_type="reptro_course.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="reptro-course-items-area reptro-course-items-area-grid">
                                        <div class="reptro-category-items-filter">
                                            <ul class="reptro-category-items">
                                                <li class="reptro-category-item active" data-filter="*"><span>All</span></li>
                                                <li class="reptro-category-item reptro-category-item-18" data-filter=".reptro_cat_18"><span>Academic</span></li>
                                                <li class="reptro-category-item reptro-category-item-22" data-filter=".reptro_cat_22"><span>Diploma</span></li>
                                                <li class="reptro-category-item reptro-category-item-23" data-filter=".reptro_cat_23"><span>Extracurricular</span></li>
                                                <li class="reptro-category-item reptro-category-item-32" data-filter=".reptro_cat_32"><span>Short Courses</span></li>
                                                <li class="reptro-category-item reptro-category-item-35" data-filter=".reptro_cat_35"><span>Technical Skill</span></li>
                                            </ul>
                                        </div>
                                        <ul class="reptro-course-items reptro-course-grid row reptro-course-isotope">
                                            <li
                                                id="post-6042"
                                                class="col-lg-4 col-md-6 reptro_cat_32 reptro_cat_35 post-6042 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-short-courses course_category-technical-skill course"
                                            >
                                                <div class="reptro-course-loop-thumbnail-area">
                                                    <div class="reptro-course-details-btn">
                                                        <a class="btn btn-fill btn-lg" href="https://reptro.xoothemes.com/courses/javascript-online-course/">Details</a>
                                                    </div>
                                                    <div class="course-thumbnail">
                                                        <img
                                                            width="570"
                                                            height="461"
                                                            src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/markus-spiske-357131-unsplash-copy-1-570x461.jpg"
                                                            class="attachment-reptro-course-thumb size-reptro-course-thumb wp-post-image"
                                                            alt="Javascript Online Course"
                                                        />
                                                    </div>
                                                    <div class="reptro-course-loop-price-and-rating">
                                                        <div class="course-price"><span class="price">&#36;99.00</span></div>
                                                        <div class="xt-course-review">
                                                            <div class="xt-review-stars-wrapper">
                                                                <ul class="xt-review-stars">
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                </ul>
                                                                <ul class="xt-review-stars xt-fill" style="width: 40%;">
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                </ul>
                                                            </div>
                                                            <span>(1 review)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reptro-course-item-inner">
                                                    <a href="https://reptro.xoothemes.com/courses/javascript-online-course/" class="course-permalink">
                                                        <h3 class="course-title">Javascript Online Course</h3>
                                                    </a>
                                                    <div class="course-info">
                                                        <span class="course-instructor"> <a href="https://reptro.xoothemes.com/profile/Imran/">Imran</a></span>
                                                        <span class="course-students" title='&lt;span class="course-students-number"&gt;41&lt;/span&gt; students enrolled'> 41 students </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                id="post-4498"
                                                class="col-lg-4 col-md-6 reptro_cat_18 reptro_cat_32 post-4498 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-academic course_category-short-courses course"
                                            >
                                                <span class="reptro-course-loop-sale">Sale</span>
                                                <div class="reptro-course-loop-thumbnail-area">
                                                    <div class="reptro-course-details-btn">
                                                        <a class="btn btn-fill btn-lg" href="https://reptro.xoothemes.com/courses/pre-primary/">Details</a>
                                                    </div>
                                                    <div class="course-thumbnail">
                                                        <img
                                                            width="570"
                                                            height="461"
                                                            src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/pan-xiaozhen-423533-unsplash-copy-1-570x461.jpg"
                                                            class="attachment-reptro-course-thumb size-reptro-course-thumb wp-post-image"
                                                            alt="Pre Primary"
                                                        />
                                                    </div>
                                                    <div class="reptro-course-loop-price-and-rating">
                                                        <div class="course-price"><span class="origin-price">&#36;150.00</span> <span class="price">&#36;99.00</span></div>
                                                        <div class="xt-course-review">
                                                            <div class="xt-review-stars-wrapper">
                                                                <ul class="xt-review-stars">
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                </ul>
                                                                <ul class="xt-review-stars xt-fill" style="width: 100%;">
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                </ul>
                                                            </div>
                                                            <span>(1 review)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reptro-course-item-inner">
                                                    <a href="https://reptro.xoothemes.com/courses/pre-primary/" class="course-permalink"><h3 class="course-title">Pre Primary</h3> </a>
                                                    <div class="course-info">
                                                        <span class="course-instructor"> <a href="https://reptro.xoothemes.com/profile/Imran/">Imran</a></span>
                                                        <span class="course-students" title='&lt;span class="course-students-number"&gt;151&lt;/span&gt; students enrolled'>
                                                                                                            151 students
                                                                                                        </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                id="post-4265"
                                                class="col-lg-4 col-md-6 reptro_cat_18 reptro_cat_22 post-4265 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-academic course_category-diploma course"
                                            >
                                                <div class="reptro-course-loop-thumbnail-area">
                                                    <div class="reptro-course-details-btn">
                                                        <a class="btn btn-fill btn-lg" href="https://reptro.xoothemes.com/courses/electrical-engineering/">Details</a>
                                                    </div>
                                                    <div class="course-thumbnail">
                                                        <img
                                                            width="570"
                                                            height="461"
                                                            src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/nicolas-thomas-540353-unsplash-copy-1-570x461.jpg"
                                                            class="attachment-reptro-course-thumb size-reptro-course-thumb wp-post-image"
                                                            alt="Electrical Engineering"
                                                        />
                                                    </div>
                                                    <div class="reptro-course-loop-price-and-rating">
                                                        <div class="course-price"><span class="price">&#36;79.00</span></div>
                                                        <div class="xt-course-review">
                                                            <div class="xt-review-stars-wrapper">
                                                                <ul class="xt-review-stars">
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                </ul>
                                                                <ul class="xt-review-stars xt-fill" style="width: 80%;">
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                </ul>
                                                            </div>
                                                            <span>(1 review)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reptro-course-item-inner">
                                                    <a href="https://reptro.xoothemes.com/courses/electrical-engineering/" class="course-permalink">
                                                        <h3 class="course-title">Electrical Engineering</h3>
                                                    </a>
                                                    <div class="course-info">
                                                        <span class="course-instructor"> <a href="https://reptro.xoothemes.com/profile/Imran/">Imran</a></span>
                                                        <span class="course-students" title='&lt;span class="course-students-number"&gt;39&lt;/span&gt; students enrolled'> 39 students </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                id="post-4035"
                                                class="col-lg-4 col-md-6 reptro_cat_23 reptro_cat_32 reptro_cat_35 post-4035 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-extracurricular course_category-short-courses course_category-technical-skill course"
                                            >
                                                <span class="reptro-course-loop-sale">Sale</span>
                                                <div class="reptro-course-loop-thumbnail-area">
                                                    <div class="reptro-course-details-btn">
                                                        <a class="btn btn-fill btn-lg" href="https://reptro.xoothemes.com/courses/technical-writing/">Details</a>
                                                    </div>
                                                    <div class="course-thumbnail">
                                                        <img
                                                            width="570"
                                                            height="461"
                                                            src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/rawpixel-com-600782-unsplash-copy-1-570x461.jpg"
                                                            class="attachment-reptro-course-thumb size-reptro-course-thumb wp-post-image"
                                                            alt="Technical Writing"
                                                        />
                                                    </div>
                                                    <div class="reptro-course-loop-price-and-rating">
                                                        <div class="course-price"><span class="origin-price">&#36;99.00</span> <span class="price">Free</span></div>
                                                        <div class="xt-course-review">
                                                            <div class="xt-review-stars-wrapper">
                                                                <ul class="xt-review-stars">
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                </ul>
                                                                <ul class="xt-review-stars xt-fill" style="width: 80%;">
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                </ul>
                                                            </div>
                                                            <span>(1 review)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reptro-course-item-inner">
                                                    <a href="https://reptro.xoothemes.com/courses/technical-writing/" class="course-permalink">
                                                        <h3 class="course-title">Technical Writing</h3>
                                                    </a>
                                                    <div class="course-info">
                                                        <span class="course-instructor"> <a href="https://reptro.xoothemes.com/profile/Imran/">Imran</a></span>
                                                        <span class="course-students" title='&lt;span class="course-students-number"&gt;61&lt;/span&gt; students enrolled'> 61 students </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                id="post-2861"
                                                class="col-lg-4 col-md-6 reptro_cat_18 reptro_cat_32 post-2861 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-academic course_category-short-courses course"
                                            >
                                                <div class="reptro-course-loop-thumbnail-area">
                                                    <div class="reptro-course-details-btn">
                                                        <a class="btn btn-fill btn-lg" href="https://reptro.xoothemes.com/courses/learn-our-history/">Details</a>
                                                    </div>
                                                    <div class="course-thumbnail">
                                                        <img
                                                            width="570"
                                                            height="461"
                                                            src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/history-1-570x461.jpg"
                                                            class="attachment-reptro-course-thumb size-reptro-course-thumb wp-post-image"
                                                            alt="Learn Our History"
                                                        />
                                                    </div>
                                                    <div class="reptro-course-loop-price-and-rating">
                                                        <div class="course-price"><span class="price">&#36;59.00</span></div>
                                                        <div class="xt-course-review">
                                                            <div class="xt-review-stars-wrapper">
                                                                <ul class="xt-review-stars">
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                </ul>
                                                                <ul class="xt-review-stars xt-fill" style="width: 0%;">
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                </ul>
                                                            </div>
                                                            <span>(0 review)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reptro-course-item-inner">
                                                    <a href="https://reptro.xoothemes.com/courses/learn-our-history/" class="course-permalink">
                                                        <h3 class="course-title">Learn Our History</h3>
                                                    </a>
                                                    <div class="course-info">
                                                        <span class="course-instructor"> <a href="https://reptro.xoothemes.com/profile/Imran/">Imran</a></span>
                                                        <span class="course-students" title='&lt;span class="course-students-number"&gt;101&lt;/span&gt; students enrolled'>
                                                                                                            101 students
                                                                                                        </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                id="post-2631"
                                                class="col-lg-4 col-md-6 reptro_cat_22 reptro_cat_32 post-2631 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-diploma course_category-short-courses course"
                                            >
                                                <div class="reptro-course-loop-thumbnail-area">
                                                    <div class="reptro-course-details-btn">
                                                        <a class="btn btn-fill btn-lg" href="https://reptro.xoothemes.com/courses/english-course-online/">Details</a>
                                                    </div>
                                                    <div class="course-thumbnail">
                                                        <img
                                                            width="570"
                                                            height="461"
                                                            src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/english-1-570x461.jpg"
                                                            class="attachment-reptro-course-thumb size-reptro-course-thumb wp-post-image"
                                                            alt="English Course Online"
                                                        />
                                                    </div>
                                                    <div class="reptro-course-loop-price-and-rating">
                                                        <div class="course-price"><span class="price">&#36;55.00</span></div>
                                                        <div class="xt-course-review">
                                                            <div class="xt-review-stars-wrapper">
                                                                <ul class="xt-review-stars">
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                </ul>
                                                                <ul class="xt-review-stars xt-fill" style="width: 0%;">
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                </ul>
                                                            </div>
                                                            <span>(0 review)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reptro-course-item-inner">
                                                    <a href="https://reptro.xoothemes.com/courses/english-course-online/" class="course-permalink">
                                                        <h3 class="course-title">English Course Online</h3>
                                                    </a>
                                                    <div class="course-info">
                                                        <span class="course-instructor"> <a href="https://reptro.xoothemes.com/profile/Imran/">Imran</a></span>
                                                        <span class="course-students" title='&lt;span class="course-students-number"&gt;100&lt;/span&gt; students enrolled'>
                                                                                                            100 students
                                                                                                        </span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="text-center reptro-all-courses-btn"><a class="btn btn-lg btn-fill" href="https://reptro.xoothemes.com/all-courses/">All Courses</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RANG -->
    <section
        class="elementor-element elementor-element-e1e9a5b elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large reptro_section_top_bottom_padding_no elementor-section elementor-top-section"
        data-id="e1e9a5b"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-extended">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-0f17a3c elementor-column elementor-col-50 elementor-top-column" data-id="0f17a3c" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-0ffb000 elementor-widget elementor-widget-reptro_section_title"
                                data-id="0ffb000"
                                data-element_type="widget"
                                data-widget_type="reptro_section_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <h3
                                        class="reptro-section-title text-default margin-bottom-small section-title-type-default margin-top-none section-title-font-size-default section-title-color-default"
                                    >
                                        <span>Amazing Course Builder</span>
                                    </h3>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-e83264d elementor-widget elementor-widget-text-editor"
                                data-id="e83264d"
                                data-element_type="widget"
                                data-widget_type="text-editor.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse
                                            urna nibh, viverra non, semper suscipit, posuere a, pede.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-501174a elementor-widget elementor-widget-reptro_video_popup"
                                data-id="501174a"
                                data-element_type="widget"
                                data-widget_type="reptro_video_popup.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="xt-video xt-video-popup-type-button_only">
                                        <div class="xt-video-popup-btn-wrapper">
                                            <a class="xt-video-popup-btn" data-fancybox href="https://www.youtube.com/watch?v=zTtZ_CpWDOY"><span class="video-popup-play-icon"></span></a>
                                            <span>Video Showcase</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-3626dd5 elementor-column elementor-col-50 elementor-top-column" data-id="3626dd5" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-35d608e elementor-widget elementor-widget-reptro_progress_bar_item"
                                data-id="35d608e"
                                data-element_type="widget"
                                data-widget_type="reptro_progress_bar_item.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="xt-skills">
                                        <div class="technical-skills">
                                            <div class="bar_group" data-max="100">
                                                <div
                                                    class="bar_group__bar thick elastic"
                                                    data-value="85"
                                                    data-tooltip="true"
                                                    data-label="Success Rate"
                                                    data-show-values="true"
                                                    data-unit="%"
                                                ></div>
                                            </div>
                                            <div class="bar_group" data-max="100">
                                                <div
                                                    class="bar_group__bar thick elastic"
                                                    data-value="75"
                                                    data-tooltip="true"
                                                    data-label="Efficiency"
                                                    data-show-values="true"
                                                    data-unit="%"
                                                ></div>
                                            </div>
                                            <div class="bar_group" data-max="100">
                                                <div
                                                    class="bar_group__bar thick elastic"
                                                    data-value="80"
                                                    data-tooltip="true"
                                                    data-label="Presentation"
                                                    data-show-values="true"
                                                    data-unit="%"
                                                ></div>
                                            </div>
                                            <div class="bar_group" data-max="100">
                                                <div class="bar_group__bar thick elastic" data-value="60" data-tooltip="true" data-label="Support" data-show-values="true" data-unit="%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events -->
    <section
        class="elementor-element elementor-element-2f02f6b7 elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large elementor-section elementor-top-section"
        data-id="2f02f6b7"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-4155fb14 elementor-column elementor-col-100 elementor-top-column" data-id="4155fb14" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-98d352 elementor-widget elementor-widget-reptro_section_title"
                                data-id="98d352"
                                data-element_type="widget"
                                data-widget_type="reptro_section_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2
                                        class="reptro-section-title text-center margin-bottom-xsmall section-title-type-default margin-top-none section-title-font-size-default section-title-color-default"
                                    >
                                        <span>Upcoming Events</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-6f4f4f82 elementor-widget elementor-widget-reptro_section_sub_title"
                                data-id="6f4f4f82"
                                data-element_type="widget"
                                data-widget_type="reptro_section_sub_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <p
                                        class="section-title-small text-center margin-bottom-medium margin-top-none section-title-small-font-default section-title-small-border-yes section-title-small-color-default"
                                    >
                                        <span>Upcoming Education Events to feed your brain.</span>
                                    </p>
                                </div>
                            </div>
                            <section
                                class="elementor-element elementor-element-39f1df00 elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large reptro_section_top_bottom_padding_no elementor-section elementor-inner-section"
                                data-id="39f1df00"
                                data-element_type="section"
                            >
                                <div class="elementor-container elementor-column-gap-extended">
                                    <div class="elementor-row">
                                        <div
                                            class="elementor-element elementor-element-28d46f33 elementor-column elementor-col-66 elementor-inner-column"
                                            data-id="28d46f33"
                                            data-element_type="column"
                                        >
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div
                                                        class="elementor-element elementor-element-714e5c7c elementor-widget elementor-widget-reptro_events"
                                                        data-id="714e5c7c"
                                                        data-element_type="widget"
                                                        data-widget_type="reptro_events.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="reptro-events-items">
                                                                <div
                                                                    class="reptro-event-item xt-smooth-shadow post-4984 tribe_events type-tribe_events status-publish has-post-thumbnail hentry tribe_events_cat-conference cat_conference"
                                                                >
                                                                    <a href="https://reptro.xoothemes.com/event/theory-of-success/" class="reptro-event-item-link">
                                                                        <div class="reptro-event-date">
                                                                            <span class="reptro-event-day">31</span> <span class="reptro-event-month">Dec</span>
                                                                            <span class="reptro-event-year">2020</span>
                                                                        </div>
                                                                        <div class="reptro-event-details">
                                                                            <img
                                                                                width="150"
                                                                                height="150"
                                                                                src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-3-1-150x150.jpg"
                                                                                class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                alt=""
                                                                                srcset="
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-3-1-150x150.jpg 150w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-3-1-300x300.jpg 300w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-3-1-400x400.jpg 400w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-3-1-140x140.jpg 140w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-3-1-100x100.jpg 100w
                                                                                                                                "
                                                                                sizes="(max-width: 150px) 100vw, 150px"
                                                                            />
                                                                            <div class="reptro-event-details-side">
                                                                                <span class="reptro-event-time"> <i class="sli-clock"></i>Thursday, 3:00 pm to 6:00 pm </span>
                                                                                <h3 class="reptro-event-title">Theory of Success</h3>
                                                                                <span class="reptro-event-venue">
                                                                                                                                    <span class="reptro-event-venue"><i class="sli-location-pin"></i>PSC Convention Hall</span>
                                                                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="reptro-event-item xt-smooth-shadow post-4983 tribe_events type-tribe_events status-publish has-post-thumbnail hentry tribe_events_cat-motivation cat_motivation"
                                                                >
                                                                    <a href="https://reptro.xoothemes.com/event/career-guideline/" class="reptro-event-item-link">
                                                                        <div class="reptro-event-date">
                                                                            <span class="reptro-event-day">05</span> <span class="reptro-event-month">Dec</span>
                                                                            <span class="reptro-event-year">2020</span>
                                                                        </div>
                                                                        <div class="reptro-event-details">
                                                                            <img
                                                                                width="150"
                                                                                height="150"
                                                                                src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/evnet-2-1-150x150.jpg"
                                                                                class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                alt=""
                                                                                srcset="
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/evnet-2-1-150x150.jpg 150w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/evnet-2-1-300x300.jpg 300w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/evnet-2-1-400x400.jpg 400w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/evnet-2-1-140x140.jpg 140w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/evnet-2-1-100x100.jpg 100w
                                                                                                                                "
                                                                                sizes="(max-width: 150px) 100vw, 150px"
                                                                            />
                                                                            <div class="reptro-event-details-side">
                                                                                <span class="reptro-event-time"> <i class="sli-clock"></i>Saturday, 4:00 pm to 7:00 pm </span>
                                                                                <h3 class="reptro-event-title">Career Guideline</h3>
                                                                                <span class="reptro-event-venue">
                                                                                                                                    <span class="reptro-event-venue"><i class="sli-location-pin"></i>PSC Convention Hall</span>
                                                                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="reptro-event-item xt-smooth-shadow post-5262 tribe_events type-tribe_events status-publish has-post-thumbnail hentry tribe_events_cat-conference cat_conference"
                                                                >
                                                                    <a href="https://reptro.xoothemes.com/event/importance-of-foundation-course/" class="reptro-event-item-link">
                                                                        <div class="reptro-event-date">
                                                                            <span class="reptro-event-day">02</span> <span class="reptro-event-month">Dec</span>
                                                                            <span class="reptro-event-year">2020</span>
                                                                        </div>
                                                                        <div class="reptro-event-details">
                                                                            <img
                                                                                width="150"
                                                                                height="150"
                                                                                src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-1-150x150.jpg"
                                                                                class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                alt=""
                                                                                srcset="
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-1-150x150.jpg 150w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-1-300x300.jpg 300w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-1-400x400.jpg 400w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-1-140x140.jpg 140w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-1-100x100.jpg 100w
                                                                                                                                "
                                                                                sizes="(max-width: 150px) 100vw, 150px"
                                                                            />
                                                                            <div class="reptro-event-details-side">
                                                                                <span class="reptro-event-time"> <i class="sli-clock"></i>Wednesday, 3:00 pm to 6:00 pm </span>
                                                                                <h3 class="reptro-event-title">Importance of Foundation Course</h3>
                                                                                <span class="reptro-event-venue">
                                                                                                                                    <span class="reptro-event-venue"><i class="sli-location-pin"></i>PSC Convention Hall</span>
                                                                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-12ed9d39 elementor-column elementor-col-33 elementor-inner-column"
                                            data-id="12ed9d39"
                                            data-element_type="column"
                                        >
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div
                                                        class="elementor-element elementor-element-50817612 elementor-widget elementor-widget-reptro_call_to_action"
                                                        data-id="50817612"
                                                        data-element_type="widget"
                                                        data-widget_type="reptro_call_to_action.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="reptro-ctl-area reptro-ctl-image">
                                                                <img
                                                                    src="https://reptro.xoothemes.com/wp-content/uploads/elementor/thumbs/blog-5-1-npq6y48he15iq525di8e4e2gm804mj96iywu4nz3wg.jpg"
                                                                    alt=""
                                                                />
                                                                <div class="reptro-ctl-content-wrapper">
                                                                    <div class="reptro-ctl-icon"><i aria-hidden="true" class="sli-envelope-letter"></i></div>
                                                                    <div class="reptro-ctl-content">
                                                                        <h2
                                                                            class="reptro-section-title text-default margin-bottom-small section-title-type-default margin-top-none section-title-font-size-default section-title-color-default section-title-highlight-inline"
                                                                        >
                                                                            Upcoming Educational Events
                                                                        </h2>
                                                                        <p
                                                                            class="section-title-small text-default margin-bottom-small margin-top-none section-title-small-font-default section-title-small-border-no section-title-small-color-default"
                                                                        >
                                                                            <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="reptro-ctl-button">
                                                                        <a class="btn btn-lg btn-border" href="https://reptro.xoothemes.com/events/">All the Events</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section
        class="elementor-element elementor-element-44dce992 elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large reptro_section_top_bottom_padding_no elementor-section elementor-top-section"
        data-id="44dce992"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-extended">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-57c02eed elementor-column elementor-col-100 elementor-top-column" data-id="57c02eed" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-5e38ecea elementor-widget elementor-widget-reptro_contact_call_to_action"
                                data-id="5e38ecea"
                                data-element_type="widget"
                                data-widget_type="reptro_contact_call_to_action.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="xt-contact-call-to-action">
                                        <div class="row">
                                            <div class="col-lg-6 xt-contact-phone">
                                                <div class="xt-contact-call-to-action-inner">
                                                    <i class="fas fa-phone"></i>
                                                    <div class="xt-contact-title">
                                                        <p>
                                                            Call Now<br />
                                                            for Free Guidelines
                                                        </p>
                                                    </div>
                                                    <div class="xt-contact-detail">0983-777-4878</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 xt-contact-email">
                                                <div class="xt-contact-call-to-action-inner">
                                                    <i class="fa fa-envelope"></i>
                                                    <div class="xt-contact-title">
                                                        <p>
                                                            Mail Us<br />
                                                            for Free Consultation
                                                        </p>
                                                    </div>
                                                    <div class="xt-contact-detail">hello@schooling.com</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@else
@section('content')
    <section
        style="padding-bottom: 10px !important; padding-top: 0px !important;"
        class="elementor-element elementor-element-1fa4a33 elementor-section-full_width elementor-section-height-default elementor-section-height-default reptro-section-padding-large elementor-section elementor-top-section"
        data-id="1fa4a33"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-a90cd52 elementor-column elementor-col-100 elementor-top-column" data-id="a90cd52" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-a1b3c83 elementor-widget elementor-widget-reptro_hero_area"
                                data-id="a1b3c83"
                                data-element_type="widget"
                                data-widget_type="reptro_hero_area.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="reptro-hero-area">
                                        <div class="reptro-hero-area-left reptro-hero-area-left-custom-bg-no reptro-hero-area-column">
                                            <h2>{{__('Become a Teacher')}}</h2>
                                            <p>{{__('Please fill this form to make a request to be a teacher in our platform')}}</p>
                                            <div role="form" class="wpcf7" id="wpcf7-f5128-p361-o1" >
                                                <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                                                <form action="{{url('/request')}}" method="post" class="wpcf7-form init demo">
                                                    @csrf
                                                    @method('POST')
                                                    <div class="xt_sign_up_now_field">
                                                        <span class="wpcf7-form-control-wrap your-name">
                                                            <input
                                                                type="text"
                                                                name="name"
                                                                value=""
                                                                size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                aria-required="true"
                                                                aria-invalid="false"
                                                                placeholder="{{__('Your Name')}}"
                                                                required
                                                            />
                                                        </span>
                                                    </div>
                                                    <div class="xt_sign_up_now_field">
                                                        <span class="wpcf7-form-control-wrap your-name">
                                                            <input
                                                                type="email"
                                                                name="email"
                                                                value=""
                                                                size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                aria-required="true"
                                                                aria-invalid="false"
                                                                placeholder="{{__('Your Email')}}"
                                                                required
                                                            />
                                                        </span>
                                                    </div>
                                                    <div class="xt_sign_up_now_field">
                                                        <span class="wpcf7-form-control-wrap your-name">
                                                            <input
                                                                type="tel"
                                                                name="phone"
                                                                value=""
                                                                size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                aria-required="true"
                                                                aria-invalid="false"
                                                                placeholder="{{__('Your Phone')}}"
                                                                required
                                                            />
                                                        </span>
                                                    </div>
                                                    <div class="xt_sign_up_now_field">
                                                        <span class="wpcf7-form-control-wrap your-name">
                                                            <select required name="material_id" id="material_id" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control">
                                                                <option disabled selected>{{__('Select Your Material')}}</option>
                                                                @foreach(\App\Models\Material::all() as $item)
                                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </span>
                                                    </div>
                                                    <div class="xt_sign_up_now_field xt_sign_up_now_submit">
                                                        <input type="submit" value="{{__('Send Request')}}" class="wpcf7-form-control wpcf7-submit" />
                                                    </div>
                                                    <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                                                </form>
                                            </div>
                                        </div>
                                        <div
                                            class="reptro-hero-area-right reptro-hero-area-column"
                                            style="background-image: url(https://reptro.xoothemes.com/wp-content/uploads/2018/06/hero-min.jpg);"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-bf49e8b elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large reptro_section_top_bottom_padding_no elementor-section elementor-top-section"
        data-id="bf49e8b"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-extended">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-704cb42 elementor-column elementor-col-100 elementor-top-column" data-id="704cb42" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap" dir="ltr">
                            <div
                                class="elementor-element elementor-element-9172a31 elementor-widget elementor-widget-reptro_section_sub_title"
                                data-id="9172a31"
                                data-element_type="widget"
                                data-widget_type="reptro_section_sub_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <p
                                        class="section-title-small text-center margin-bottom-none margin-top-none section-title-small-font-default section-title-small-border-no section-title-small-color-default"
                                    >
                                        <span>{{__('Welcome To')}} {{setting('site.name')}}</span>
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-1d66e73 elementor-widget elementor-widget-reptro_section_title"
                                data-id="1d66e73"
                                data-element_type="widget"
                                data-widget_type="reptro_section_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2
                                        class="reptro-section-title text-center margin-bottom-medium section-title-type-border margin-top-none section-title-font-size-default section-title-color-default"
                                    >
                                        <span>{{__('Course Materials')}}</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-f9e4383 elementor-widget elementor-widget-reptro_course_categories"
                                data-id="f9e4383"
                                data-element_type="widget"
                                data-widget_type="reptro_course_categories.default"
                            >
                                <div class="elementor-widget-container">
                                    <div
                                        class="reptro-course-category-wrapper reptro-course-category-img-type-image reptro-course-category-slider reptro-course-category-icon- owl-carousel owl-theme"
                                        data-autoplay="true"
                                        data-loop="true"
                                        data-items="4"
                                        data-desktopsmall="3"
                                        data-tablet="2"
                                        data-mobile="1"
                                        data-navigation="true"
                                        data-pagination="false"
                                        data-direction="false"
                                    >
                                        @foreach(\App\Models\Material::all() as $item)
                                        <div class="reptro-course-category-item">
                                            <div class="reptro-course-item-inner">
                                                <a href="{{url('courses/category/' . $item->id)}}">
                                                    <div class="reptro-cat-image">
                                                        <img
                                                            width="480"
                                                            height="519"
                                                            src="{{url($item->image)}}"
                                                            class="attachment-reptro-blog-small size-reptro-blog-small"
                                                            alt=""
                                                        />
                                                    </div>
                                                    <div class="reptro-cat-description">
                                                        <h4>{{$item->name}}</h4>
                                                        <span>{{\App\Models\Course::where('material_id', $item->id)->count()}} {{__('Courses')}}</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-2e6db3a8 elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large reptro_section_top_bottom_padding_no elementor-section elementor-top-section"
        data-id="2e6db3a8"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
    >
        <div class="elementor-container elementor-column-gap-extended">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-6bf8433a elementor-column elementor-col-50 elementor-top-column" data-id="6bf8433a" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-6076ce65 elementor-widget elementor-widget-reptro_section_title"
                                data-id="6076ce65"
                                data-element_type="widget"
                                data-widget_type="reptro_section_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <h3
                                        class="reptro-section-title text-default margin-bottom-medium section-title-type-default margin-top-none section-title-font-size-default section-title-color-default"
                                    >
                                        <span>{{__('About Title')}}</span>
                                    </h3>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-1c664645 elementor-widget elementor-widget-text-editor"
                                data-id="1c664645"
                                data-element_type="widget"
                                data-widget_type="text-editor.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <div>
                                            <p>{{__('About Description')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-6fcccbe6 repto-button-border elementor-widget elementor-widget-button"
                                data-id="6fcccbe6"
                                data-element_type="widget"
                                data-widget_type="button.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="{{url('about')}}" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                            <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">{{__('Read More')}}</span> </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-6589ea55 elementor-column elementor-col-50 elementor-top-column" data-id="6589ea55" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-60c70135 elementor-widget elementor-widget-reptro_video_popup"
                                data-id="60c70135"
                                data-element_type="widget"
                                data-widget_type="reptro_video_popup.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="xt-video xt-video-popup-type-with_image">
                                        <div class="xt-video-img">
                                            <img src="https://reptro.xoothemes.com/wp-content/uploads/2018/06/about-6-min.jpg" alt="" />
                                            <div class="xt-video-overlay">
                                                <a class="xt-video-popup-btn" data-fancybox href="{{setting('about.youtube')}}"><span class="video-popup-play-icon"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-5b6cecc2 elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large reptro_section_top_bottom_padding_no elementor-section elementor-top-section"
        data-id="5b6cecc2"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-extended">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-3168101e elementor-column elementor-col-100 elementor-top-column" data-id="3168101e" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-2e2f80b1 elementor-widget elementor-widget-reptro_section_title"
                                data-id="2e2f80b1"
                                data-element_type="widget"
                                data-widget_type="reptro_section_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2
                                        class="reptro-section-title text-center margin-bottom-xsmall section-title-type-default margin-top-none section-title-font-size-default section-title-color-default"
                                    >
                                        <span>{{__('Popular Courses')}}</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-1c0dacaa elementor-widget elementor-widget-reptro_section_sub_title"
                                data-id="1c0dacaa"
                                data-element_type="widget"
                                data-widget_type="reptro_section_sub_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <p
                                        class="section-title-small text-center margin-bottom-medium margin-top-none section-title-small-font-default section-title-small-border-yes section-title-small-color-default"
                                    >
                                        <span>Top sold courses are now available in a sustainable price.</span>
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-75e8a090 elementor-widget elementor-widget-reptro_course"
                                data-id="75e8a090"
                                data-element_type="widget"
                                data-widget_type="reptro_course.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="reptro-course-items-area reptro-course-items-area-grid">
                                        <ul class="reptro-course-items reptro-course-grid row">
                                            @foreach(\App\Models\Course::all()->take(6) as $item)
                                                <li
                                                    id="post-4498"
                                                    class="col-lg-4 col-md-6 post-4498 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-academic course_category-short-courses course"
                                                >
                                                    @if($item->discount)
                                                    <span class="reptro-course-loop-sale">{{__('Sale')}}</span>
                                                    @endif
                                                    <div class="reptro-course-loop-thumbnail-area">
                                                        <div class="reptro-course-details-btn">
                                                            <a class="btn btn-fill btn-lg" href="{{url('courses/' . $item->slug)}}">{{__('Details')}}</a>
                                                        </div>
                                                        <div class="course-thumbnail">
                                                            <img
                                                                width="570"
                                                                height="461"
                                                                src="{{url($item->image)}}"
                                                                class="attachment-reptro-course-thumb size-reptro-course-thumb wp-post-image"
                                                                alt="Pre Primary"
                                                            />
                                                        </div>
                                                        <div class="reptro-course-loop-price-and-rating">
                                                            <div class="course-price">
                                                                @if($item->discount)
                                                                <span class="origin-price">{{$item->price}}{{setting('admin.$')}}</span>
                                                                <span class="price">{{$item->price - $item->discount}}{{setting('admin.$')}}</span>
                                                                @else
                                                                    <span class="price">{{$item->price}}{{setting('admin.$')}}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="reptro-course-item-inner">
                                                        <a href="{{url('courses/' . $item->slug)}}" class="course-permalink"><h3 class="course-title">{{$item->name}}</h3> </a>
                                                        <div class="course-info">
                                                            <span class="course-instructor"> <a href="{{url('courses/category/' . $item->material_id)}}">{{\App\Models\Material::find($item->material_id)->name}}</a></span>
                                                            <span class="course-students" title='&lt;span class="course-students-number"&gt;151&lt;/span&gt; students enrolled'>
                                                                                                            151 students
                                                                                                        </span>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="text-center reptro-all-courses-btn"><a class="btn btn-lg btn-fill" href="{{url('courses')}}">{{__('All Courses')}}</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-5f48d3de xt_row_primary_bg_color_white xt_row_primary_bg_color_white_yes elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large reptro_section_top_bottom_padding_no elementor-section elementor-top-section"
        data-id="5f48d3de"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-extended">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-2bf38773 elementor-column elementor-col-25 elementor-top-column" data-id="2bf38773" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-1474fbb7 xt_counter_style_yes elementor-widget elementor-widget-counter"
                                data-id="1474fbb7"
                                data-element_type="widget"
                                data-widget_type="counter.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="2000" data-to-value="100" data-from-value="" data-delimiter=",">{{\App\Models\Teacher::all()->count()}}</span>
                                            <span class="elementor-counter-number-suffix">+</span>
                                        </div>
                                        <div class="elementor-counter-title">{{__('Teachers')}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-39702b5c elementor-column elementor-col-25 elementor-top-column" data-id="39702b5c" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-6c9f638 xt_counter_style_yes elementor-widget elementor-widget-counter"
                                data-id="6c9f638"
                                data-element_type="widget"
                                data-widget_type="counter.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="2000" data-to-value="12" data-from-value="" data-delimiter=",">{{setting('about.years')}}</span>
                                            <span class="elementor-counter-number-suffix">+</span>
                                        </div>
                                        <div class="elementor-counter-title">{{__('Years of Service')}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-248eb837 elementor-column elementor-col-25 elementor-top-column" data-id="248eb837" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-721286f8 xt_counter_style_yes elementor-widget elementor-widget-counter"
                                data-id="721286f8"
                                data-element_type="widget"
                                data-widget_type="counter.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="2000" data-to-value="135" data-from-value="" data-delimiter=",">{{\App\User::all()->count()}}</span>
                                            <span class="elementor-counter-number-suffix">+</span>
                                        </div>
                                        <div class="elementor-counter-title">{{__('Students')}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-4859b042 elementor-column elementor-col-25 elementor-top-column" data-id="4859b042" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-4c3105c7 xt_counter_style_yes elementor-widget elementor-widget-counter"
                                data-id="4c3105c7"
                                data-element_type="widget"
                                data-widget_type="counter.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="2000" data-to-value="500" data-from-value="" data-delimiter=",">{{\App\Models\Course::all()->count()}}</span>
                                            <span class="elementor-counter-number-suffix">+</span>
                                        </div>
                                        <div class="elementor-counter-title">{{__('Courses')}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-3549ee8f elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large reptro_section_top_bottom_padding_no elementor-section elementor-top-section"
        data-id="3549ee8f"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
    >
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-extended">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-63e68687 elementor-column elementor-col-100 elementor-top-column" data-id="63e68687" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-779cc270 elementor-widget elementor-widget-reptro_section_title"
                                data-id="779cc270"
                                data-element_type="widget"
                                data-widget_type="reptro_section_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2
                                        class="reptro-section-title text-center margin-bottom-xsmall section-title-type-default margin-top-none section-title-font-size-default section-title-color-default"
                                    >
                                        <span>Featured Instructors</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-19743b25 elementor-widget elementor-widget-reptro_section_sub_title"
                                data-id="19743b25"
                                data-element_type="widget"
                                data-widget_type="reptro_section_sub_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <p
                                        class="section-title-small text-center margin-bottom-medium margin-top-none section-title-small-font-default section-title-small-border-yes section-title-small-color-default"
                                    >
                                        <span>Learn from our best instructors.</span>
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-725433d3 elementor-widget elementor-widget-reptro_instructor"
                                data-id="725433d3"
                                data-element_type="widget"
                                data-widget_type="reptro_instructor.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="xt-team-members row">
                                        <div class="col-lg-4 col-md-6 xt-grid-equal-height">
                                            <div class="single-team text-center shadow">
                                                <div class="member-thumb">
                                                    <img
                                                        width="140"
                                                        height="140"
                                                        src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/img-1-1-140x140.jpg"
                                                        class="attachment-reptro-team-thumb size-reptro-team-thumb wp-post-image"
                                                        alt=""
                                                        srcset="
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/img-1-1-140x140.jpg 140w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/img-1-1-300x300.jpg 300w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/img-1-1-150x150.jpg 150w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/img-1-1-100x100.jpg 100w
                                                                                                        "
                                                        sizes="(max-width: 140px) 100vw, 140px"
                                                    />
                                                </div>
                                                <div class="member-desc">
                                                    <h3>Margaret Susan</h3>
                                                    <span>Marketing Executive</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do&hellip;</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 xt-grid-equal-height">
                                            <div class="single-team text-center shadow">
                                                <div class="member-thumb">
                                                    <img
                                                        width="140"
                                                        height="140"
                                                        src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/img-2-1-140x140.jpg"
                                                        class="attachment-reptro-team-thumb size-reptro-team-thumb wp-post-image"
                                                        alt=""
                                                        srcset="
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/img-2-1-140x140.jpg 140w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/img-2-1-300x300.jpg 300w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/img-2-1-150x150.jpg 150w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/img-2-1-100x100.jpg 100w
                                                                                                        "
                                                        sizes="(max-width: 140px) 100vw, 140px"
                                                    />
                                                </div>
                                                <div class="member-desc">
                                                    <h3>Elizabeth Blackwell</h3>
                                                    <span>Business Manager</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do&hellip;</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 xt-grid-equal-height">
                                            <div class="single-team text-center shadow">
                                                <div class="member-thumb">
                                                    <img
                                                        width="140"
                                                        height="140"
                                                        src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/img-3-1-140x140.jpg"
                                                        class="attachment-reptro-team-thumb size-reptro-team-thumb wp-post-image"
                                                        alt=""
                                                        srcset="
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/img-3-1-140x140.jpg 140w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/img-3-1-300x300.jpg 300w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/img-3-1-150x150.jpg 150w,
                                                                                                            https://reptro.xoothemes.com/wp-content/uploads/2018/04/img-3-1-100x100.jpg 100w
                                                                                                        "
                                                        sizes="(max-width: 140px) 100vw, 140px"
                                                    />
                                                </div>
                                                <div class="member-desc">
                                                    <h3>David Givens</h3>
                                                    <span>Graphic Designer</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do&hellip;</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-4d4e722 elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large elementor-section elementor-top-section"
        data-id="4d4e722"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-e5b175d elementor-column elementor-col-100 elementor-top-column" data-id="e5b175d" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-0ce13f1 elementor-widget elementor-widget-reptro_section_title"
                                data-id="0ce13f1"
                                data-element_type="widget"
                                data-widget_type="reptro_section_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2
                                        class="reptro-section-title text-center margin-bottom-xsmall section-title-type-default margin-top-none section-title-font-size-default section-title-color-default"
                                    >
                                        <span>Upcoming Events</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-f394be4 elementor-widget elementor-widget-reptro_section_sub_title"
                                data-id="f394be4"
                                data-element_type="widget"
                                data-widget_type="reptro_section_sub_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <p
                                        class="section-title-small text-center margin-bottom-medium margin-top-none section-title-small-font-default section-title-small-border-yes section-title-small-color-default"
                                    >
                                        <span>Upcoming Education Events to feed your brain.</span>
                                    </p>
                                </div>
                            </div>
                            <section
                                class="elementor-element elementor-element-62d65f6 elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large reptro_section_top_bottom_padding_no elementor-section elementor-inner-section"
                                data-id="62d65f6"
                                data-element_type="section"
                            >
                                <div class="elementor-container elementor-column-gap-extended">
                                    <div class="elementor-row">
                                        <div
                                            class="elementor-element elementor-element-316d96a elementor-column elementor-col-66 elementor-inner-column"
                                            data-id="316d96a"
                                            data-element_type="column"
                                        >
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div
                                                        class="elementor-element elementor-element-72fe068 elementor-widget elementor-widget-reptro_events"
                                                        data-id="72fe068"
                                                        data-element_type="widget"
                                                        data-widget_type="reptro_events.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="reptro-events-items">
                                                                <div
                                                                    class="reptro-event-item xt-smooth-shadow post-4984 tribe_events type-tribe_events status-publish has-post-thumbnail hentry tribe_events_cat-conference cat_conference"
                                                                >
                                                                    <a href="https://reptro.xoothemes.com/event/theory-of-success/" class="reptro-event-item-link">
                                                                        <div class="reptro-event-date">
                                                                            <span class="reptro-event-day">31</span> <span class="reptro-event-month">Dec</span>
                                                                            <span class="reptro-event-year">2020</span>
                                                                        </div>
                                                                        <div class="reptro-event-details">
                                                                            <img
                                                                                width="150"
                                                                                height="150"
                                                                                src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-3-1-150x150.jpg"
                                                                                class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                alt=""
                                                                                srcset="
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-3-1-150x150.jpg 150w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-3-1-300x300.jpg 300w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-3-1-400x400.jpg 400w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-3-1-140x140.jpg 140w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-3-1-100x100.jpg 100w
                                                                                                                                "
                                                                                sizes="(max-width: 150px) 100vw, 150px"
                                                                            />
                                                                            <div class="reptro-event-details-side">
                                                                                <span class="reptro-event-time"> <i class="sli-clock"></i>Thursday, 3:00 pm to 6:00 pm </span>
                                                                                <h3 class="reptro-event-title">Theory of Success</h3>
                                                                                <span class="reptro-event-venue">
                                                                                                                                    <span class="reptro-event-venue"><i class="sli-location-pin"></i>PSC Convention Hall</span>
                                                                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="reptro-event-item xt-smooth-shadow post-4983 tribe_events type-tribe_events status-publish has-post-thumbnail hentry tribe_events_cat-motivation cat_motivation"
                                                                >
                                                                    <a href="https://reptro.xoothemes.com/event/career-guideline/" class="reptro-event-item-link">
                                                                        <div class="reptro-event-date">
                                                                            <span class="reptro-event-day">05</span> <span class="reptro-event-month">Dec</span>
                                                                            <span class="reptro-event-year">2020</span>
                                                                        </div>
                                                                        <div class="reptro-event-details">
                                                                            <img
                                                                                width="150"
                                                                                height="150"
                                                                                src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/evnet-2-1-150x150.jpg"
                                                                                class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                alt=""
                                                                                srcset="
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/evnet-2-1-150x150.jpg 150w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/evnet-2-1-300x300.jpg 300w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/evnet-2-1-400x400.jpg 400w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/evnet-2-1-140x140.jpg 140w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/evnet-2-1-100x100.jpg 100w
                                                                                                                                "
                                                                                sizes="(max-width: 150px) 100vw, 150px"
                                                                            />
                                                                            <div class="reptro-event-details-side">
                                                                                <span class="reptro-event-time"> <i class="sli-clock"></i>Saturday, 4:00 pm to 7:00 pm </span>
                                                                                <h3 class="reptro-event-title">Career Guideline</h3>
                                                                                <span class="reptro-event-venue">
                                                                                                                                    <span class="reptro-event-venue"><i class="sli-location-pin"></i>PSC Convention Hall</span>
                                                                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div
                                                                    class="reptro-event-item xt-smooth-shadow post-5262 tribe_events type-tribe_events status-publish has-post-thumbnail hentry tribe_events_cat-conference cat_conference"
                                                                >
                                                                    <a href="https://reptro.xoothemes.com/event/importance-of-foundation-course/" class="reptro-event-item-link">
                                                                        <div class="reptro-event-date">
                                                                            <span class="reptro-event-day">02</span> <span class="reptro-event-month">Dec</span>
                                                                            <span class="reptro-event-year">2020</span>
                                                                        </div>
                                                                        <div class="reptro-event-details">
                                                                            <img
                                                                                width="150"
                                                                                height="150"
                                                                                src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-1-150x150.jpg"
                                                                                class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                alt=""
                                                                                srcset="
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-1-150x150.jpg 150w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-1-300x300.jpg 300w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-1-400x400.jpg 400w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-1-140x140.jpg 140w,
                                                                                                                                    https://reptro.xoothemes.com/wp-content/uploads/2018/04/event-1-100x100.jpg 100w
                                                                                                                                "
                                                                                sizes="(max-width: 150px) 100vw, 150px"
                                                                            />
                                                                            <div class="reptro-event-details-side">
                                                                                <span class="reptro-event-time"> <i class="sli-clock"></i>Wednesday, 3:00 pm to 6:00 pm </span>
                                                                                <h3 class="reptro-event-title">Importance of Foundation Course</h3>
                                                                                <span class="reptro-event-venue">
                                                                                                                                    <span class="reptro-event-venue"><i class="sli-location-pin"></i>PSC Convention Hall</span>
                                                                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-aa79a99 elementor-column elementor-col-33 elementor-inner-column"
                                            data-id="aa79a99"
                                            data-element_type="column"
                                        >
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div
                                                        class="elementor-element elementor-element-0e9db54 elementor-widget elementor-widget-reptro_call_to_action"
                                                        data-id="0e9db54"
                                                        data-element_type="widget"
                                                        data-widget_type="reptro_call_to_action.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="reptro-ctl-area reptro-ctl-image">
                                                                <img
                                                                    src="https://reptro.xoothemes.com/wp-content/uploads/elementor/thumbs/blog-5-1-npq6y48he15iq525di8e4e2gm804mj96iywu4nz3wg.jpg"
                                                                    alt=""
                                                                />
                                                                <div class="reptro-ctl-content-wrapper">
                                                                    <div class="reptro-ctl-icon"><i aria-hidden="true" class="sli-envelope-letter"></i></div>
                                                                    <div class="reptro-ctl-content">
                                                                        <h2
                                                                            class="reptro-section-title text-default margin-bottom-small section-title-type-default margin-top-none section-title-font-size-default section-title-color-default section-title-highlight-inline"
                                                                        >
                                                                            Upcoming Educational Events
                                                                        </h2>
                                                                        <p
                                                                            class="section-title-small text-default margin-bottom-small margin-top-none section-title-small-font-default section-title-small-border-no section-title-small-color-default"
                                                                        >
                                                                            <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="reptro-ctl-button">
                                                                        <a class="btn btn-lg btn-border" href="https://reptro.xoothemes.com/events/">All the Events</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-e0de729 elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large reptro_section_top_bottom_padding_no elementor-section elementor-top-section"
        data-id="e0de729"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
    >
        <div class="elementor-container elementor-column-gap-extended">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-303e520 elementor-column elementor-col-100 elementor-top-column" data-id="303e520" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-257e16d elementor-widget elementor-widget-reptro_section_title"
                                data-id="257e16d"
                                data-element_type="widget"
                                data-widget_type="reptro_section_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2
                                        class="reptro-section-title text-center margin-bottom-xsmall section-title-type-default margin-top-none section-title-font-size-default section-title-color-default"
                                    >
                                        <span>Latest News</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-6fc45de elementor-widget elementor-widget-reptro_section_sub_title"
                                data-id="6fc45de"
                                data-element_type="widget"
                                data-widget_type="reptro_section_sub_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <p
                                        class="section-title-small text-center margin-bottom-medium margin-top-none section-title-small-font-default section-title-small-border-yes section-title-small-color-default"
                                    >
                                        <span>Education news all over the world.</span>
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-36443bf elementor-widget elementor-widget-reptro_post_item"
                                data-id="36443bf"
                                data-element_type="widget"
                                data-widget_type="reptro_post_item.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="xt-blog-post-grid row">
                                        <article
                                            class="col-lg-4 col-md-6 post-5022 post type-post status-publish format-standard has-post-thumbnail hentry category-elearning category-online-learning"
                                        >
                                            <div class="xt-post-item">
                                                <div class="xt-post-item-thumb">
                                                    <figure>
                                                        <a href="https://reptro.xoothemes.com/the-advantages-and-importance-of-online-learning/">
                                                            <img src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/blog-13-1-480x519.jpg" alt="" />
                                                        </a>
                                                    </figure>
                                                    <div class="xt-post-item-categories"><a href="https://reptro.xoothemes.com/category/elearning/">eLearning</a></div>
                                                </div>
                                                <div class="xt-post-item-content">
                                                    <div class="xt-post-item-date">April 11, 2018</div>
                                                    <h4 class="xt-post-item-title">
                                                        <a href="https://reptro.xoothemes.com/the-advantages-and-importance-of-online-learning/">
                                                            The Advantages and Importance of Online Learning
                                                        </a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </article>
                                        <article
                                            class="col-lg-4 col-md-6 post-5021 post type-post status-publish format-standard has-post-thumbnail hentry category-group-study category-online-learning tag-group tag-reptro tag-study"
                                        >
                                            <div class="xt-post-item">
                                                <div class="xt-post-item-thumb">
                                                    <figure>
                                                        <a href="https://reptro.xoothemes.com/the-importance-of-study-groups/">
                                                            <img src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/blog-10-1-480x519.jpg" alt="" />
                                                        </a>
                                                    </figure>
                                                    <div class="xt-post-item-categories"><a href="https://reptro.xoothemes.com/category/group-study/">Group Study</a></div>
                                                </div>
                                                <div class="xt-post-item-content">
                                                    <div class="xt-post-item-date">April 11, 2018</div>
                                                    <h4 class="xt-post-item-title">
                                                        <a href="https://reptro.xoothemes.com/the-importance-of-study-groups/">The Importance of Study Groups</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </article>
                                        <article
                                            class="col-lg-4 col-md-6 post-5020 post type-post status-publish format-standard has-post-thumbnail hentry category-extra-curricular category-online-learning"
                                        >
                                            <div class="xt-post-item">
                                                <div class="xt-post-item-thumb">
                                                    <figure>
                                                        <a href="https://reptro.xoothemes.com/painting-art-lessons-for-high-school/">
                                                            <img src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/blog-9-1-480x519.jpg" alt="" />
                                                        </a>
                                                    </figure>
                                                    <div class="xt-post-item-categories"><a href="https://reptro.xoothemes.com/category/extra-curricular/">Extra Curricular</a></div>
                                                </div>
                                                <div class="xt-post-item-content">
                                                    <div class="xt-post-item-date">April 11, 2018</div>
                                                    <h4 class="xt-post-item-title">
                                                        <a href="https://reptro.xoothemes.com/painting-art-lessons-for-high-school/">Painting Art Lessons for High School</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-627aabc elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large reptro_section_top_bottom_padding_no elementor-section elementor-top-section"
        data-id="627aabc"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
    >
        <div class="elementor-container elementor-column-gap-extended">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-cd0c9f4 elementor-column elementor-col-100 elementor-top-column" data-id="cd0c9f4" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-35204a0 elementor-widget elementor-widget-reptro_section_title"
                                data-id="35204a0"
                                data-element_type="widget"
                                data-widget_type="reptro_section_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2
                                        class="reptro-section-title text-center margin-bottom-xsmall section-title-type-default margin-top-none section-title-font-size-default section-title-color-default"
                                    >
                                        <span>Our Sponsors</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-0c1f254 elementor-widget elementor-widget-reptro_section_sub_title"
                                data-id="0c1f254"
                                data-element_type="widget"
                                data-widget_type="reptro_section_sub_title.default"
                            >
                                <div class="elementor-widget-container">
                                    <p
                                        class="section-title-small text-center margin-bottom-medium margin-top-none section-title-small-font-default section-title-small-border-yes section-title-small-color-default"
                                    >
                                        <span>Education news all over</span>
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-e331559 elementor-widget elementor-widget-reptro_client_logo"
                                data-id="e331559"
                                data-element_type="widget"
                                data-widget_type="reptro_client_logo.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="xt-client-logo">
                                        <div class="xt-logos">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-6 logo-item">
                                                    <a href="#"><img src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/logo-5-1.png" class="img-responsive" alt="" /></a>
                                                </div>
                                                <div class="col-lg-2 col-md-6 logo-item">
                                                    <a href="#"><img src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/logo-3-1.png" class="img-responsive" alt="" /></a>
                                                </div>
                                                <div class="col-lg-2 col-md-6 logo-item">
                                                    <a href="#"><img src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/logo-2-1.png" class="img-responsive" alt="" /></a>
                                                </div>
                                                <div class="col-lg-2 col-md-6 logo-item">
                                                    <a href="#"><img src="https://reptro.xoothemes.com/wp-content/uploads/2018/04/logo-1-1.png" class="img-responsive" alt="" /></a>
                                                </div>
                                                <div class="col-lg-2 col-md-6 logo-item">
                                                    <a href="#"><img src="https://reptro.xoothemes.com/wp-content/uploads/2018/05/logo5.png" class="img-responsive" alt="" /></a>
                                                </div>
                                                <div class="col-lg-2 col-md-6 logo-item">
                                                    <a href="#"><img src="https://reptro.xoothemes.com/wp-content/uploads/2018/05/logo-6.png" class="img-responsive" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-element elementor-element-4bc7259f elementor-section-boxed elementor-section-height-default elementor-section-height-default reptro-section-padding-large reptro_section_top_bottom_padding_no elementor-section elementor-top-section"
        data-id="4bc7259f"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
    >
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-extended">
            <div class="elementor-row">
                <div class="elementor-element elementor-element-343870c2 elementor-column elementor-col-100 elementor-top-column" data-id="343870c2" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div
                                class="elementor-element elementor-element-3451ae19 elementor-widget elementor-widget-reptro_call_to_action"
                                data-id="3451ae19"
                                data-element_type="widget"
                                data-widget_type="reptro_call_to_action.default"
                            >
                                <div class="elementor-widget-container">
                                    <div class="reptro-ctl-area reptro-ctl-default">
                                        <div class="reptro-ctl-content-wrapper">
                                            <div class="reptro-ctl-icon"><i aria-hidden="true" class="sli-envelope-letter"></i></div>
                                            <div class="reptro-ctl-content">
                                                <h2
                                                    class="reptro-section-title text-default margin-bottom-small section-title-type-default margin-top-none section-title-font-size-default section-title-color-default section-title-highlight-inline"
                                                >
                                                    Become a Teacher
                                                </h2>
                                                <p
                                                    class="section-title-small text-default margin-bottom-small margin-top-none section-title-small-font-default section-title-small-border-no section-title-small-color-default"
                                                >
                                                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </span>
                                                </p>
                                            </div>
                                            <div class="reptro-ctl-button"><a class="btn btn-lg btn-border" href="https://reptro.xoothemes.com/become-a-teacher/">Join With US</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@endif
