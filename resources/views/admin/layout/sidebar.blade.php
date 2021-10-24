<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/settings') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.setting.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/forms') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.form.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/customers') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.customer.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/categores') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.categore.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/classes') }}"><i class="nav-icon icon-graduation"></i> {{ trans('admin.class.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/contacts') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.contact.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/courses') }}"><i class="nav-icon icon-drop"></i> {{ trans('admin.course.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/faqs') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.faq.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/homework') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.homework.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/homeworks-solves') }}"><i class="nav-icon icon-star"></i> {{ trans('admin.homeworks-solf.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/materials') }}"><i class="nav-icon icon-star"></i> {{ trans('admin.material.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/menus') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.menu.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/orders') }}"><i class="nav-icon icon-flag"></i> {{ trans('admin.order.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/pages') }}"><i class="nav-icon icon-star"></i> {{ trans('admin.page.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/payments') }}"><i class="nav-icon icon-flag"></i> {{ trans('admin.payment.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/photos') }}"><i class="nav-icon icon-energy"></i> {{ trans('admin.photo.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/posts') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.post.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/reviews') }}"><i class="nav-icon icon-plane"></i> {{ trans('admin.review.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/socials') }}"><i class="nav-icon icon-star"></i> {{ trans('admin.social.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/tags') }}"><i class="nav-icon icon-graduation"></i> {{ trans('admin.tag.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/teachers') }}"><i class="nav-icon icon-plane"></i> {{ trans('admin.teacher.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/tests') }}"><i class="nav-icon icon-drop"></i> {{ trans('admin.test.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/tests-solves') }}"><i class="nav-icon icon-puzzle"></i> {{ trans('admin.tests-solf.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/users') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.user.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/comments') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.comment.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
