<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Noble<span>UI</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">{{__('Main')}}</li>
      <li class="nav-item {{ active_class(['admin']) }}">
        <a href="{{ url('/admin') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">{{__('Dashboard')}}</span>
        </a>
      </li>
      <li class="nav-item nav-category">{{__('Content')}}</li>
        <li class="nav-item {{ active_class([
        'admin/teachers',
        'admin/teachers/*',
        'admin/courses',
        'admin/courses/*',
        'admin/rooms',
        'admin/rooms/*',
        'admin/classes',
        'admin/classes/*',
        'admin/materials',
        'admin/materials/*'
    ]) }}">
            <a class="nav-link" data-toggle="collapse" href="#courses" role="button" aria-expanded="{{ is_active_route([
        'admin/teachers',
        'admin/teachers/*',
        'admin/courses',
        'admin/courses/*',
        'admin/rooms',
        'admin/rooms/*',
        'admin/classes',
        'admin/classes/*',
        'admin/materials',
        'admin/materials/*'
    ]) }}" aria-controls="courses">
                <i class="link-icon icon-badge"></i>
                <span class="link-title">{{__('Courses')}}</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse {{ show_class([
        'admin/teachers',
        'admin/teachers/*',
        'admin/courses',
        'admin/courses/*',
        'admin/rooms',
        'admin/rooms/*',
        'admin/classes',
        'admin/classes/*',
        'admin/materials',
        'admin/materials/*'
    ]) }}" id="courses">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{ url('admin/	teachers') }}" class="nav-link {{ active_class(['admin/teachers','admin/teachers/*']) }}">{{__('Teachers')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/courses') }}" class="nav-link {{ active_class(['admin/courses','admin/courses/*']) }}">{{__('Your Courses')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/rooms') }}" class="nav-link {{ active_class(['admin/rooms', 'admin/rooms/*']) }}">{{__('Rooms')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/classes') }}" class="nav-link {{ active_class(['admin/classes','admin/classes/*']) }}">{{__('Classes')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/materials') }}" class="nav-link {{ active_class(['admin/materials', 'admin/materials/*']) }}">{{__('Materials')}}</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ active_class([
        'admin/users',
        'admin/users/*',
        'admin/homework',
        'admin/homework/*',
        'admin/homeworks-sloves',
        'admin/homeworks-sloves/*',
        'admin/tests',
        'admin/tests/*',
        'admin/tests-sloves',
        'admin/tests-sloves/*'
    ]) }}">
            <a class="nav-link" data-toggle="collapse" href="#students" role="button" aria-expanded="{{ is_active_route([
        'admin/users',
        'admin/users/*',
        'admin/homework',
        'admin/homework/*',
        'admin/homeworks-sloves',
        'admin/homeworks-sloves/*',
        'admin/tests',
        'admin/tests/*',
        'admin/tests-sloves',
        'admin/tests-sloves/*'
    ]) }}" aria-controls="students">
                <i class="link-icon icon-eyeglass"></i>
                <span class="link-title">{{__('Students')}}</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse {{ show_class([
            'admin/users',
        'admin/users/*',
        'admin/homework',
        'admin/homework/*',
        'admin/homeworks-sloves',
        'admin/homeworks-solves/*',
        'admin/tests',
        'admin/tests/*',
        'admin/tests-sloves',
        'admin/tests-sloves/*'
    ]) }}" id="students">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{ url('admin/users') }}" class="nav-link {{ active_class(['admin/users','admin/users/*']) }}">{{__('Your Students')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/homework') }}" class="nav-link {{ active_class(['admin/homework', 'admin/homework/*']) }}">{{__('Homeworks')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/homeworks-solves') }}" class="nav-link {{ active_class(['admin/homeworks-solves','admin/homeworks-solves/*']) }}">{{__('Homework Solves')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/tests') }}" class="nav-link {{ active_class(['admin/tests', 'admin/tests/*']) }}">{{__('Tests')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/tests-solves') }}" class="nav-link {{ active_class(['admin/tests-solves', 'admin/tests-solves/*']) }}">{{__('Tests Solves')}}</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ active_class([
        'admin/orders',
        'admin/orders/*',
        'admin/payments',
        'admin/payments/*',
    ]) }}">
            <a class="nav-link" data-toggle="collapse" href="#orders" role="button" aria-expanded="{{ is_active_route([
        'admin/orders',
        'admin/orders/*',
        'admin/payments',
        'admin/payments/*',
    ]) }}" aria-controls="orders">
                <i class="link-icon icon-credit-card"></i>
                <span class="link-title">{{__('Orders')}}</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse {{ show_class([
        'admin/orders',
        'admin/orders/*',
        'admin/payments',
        'admin/payments/*',
    ]) }}" id="orders">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{ url('admin/orders') }}" class="nav-link {{ active_class(['admin/orders','admin/orders/*']) }}">{{__('Your Orders')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/payments') }}" class="nav-link {{ active_class(['admin/payments', 'admin/payments/*']) }}">{{__('Your Payments')}}</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ active_class([
        'admin/posts',
        'admin/posts/*',
        'admin/pages',
        'admin/pages/*',
        'admin/comments',
        'admin/comments/*',
        'admin/reviews',
        'admin/reviews/*',
        'admin/categores',
        'admin/categores/*',
        'admin/contacts',
        'admin/contacts/*',
        'admin/faqs',
        'admin/faqs/*',
        'admin/menus',
        'admin/menus/*',
        'admin/photos',
        'admin/photos/*',
        'admin/socials',
        'admin/socials/*',
        'admin/tags',
        'admin/tags/*'
    ]) }}">
            <a class="nav-link" data-toggle="collapse" href="#cms" role="button" aria-expanded="{{ is_active_route([
 'admin/posts',
        'admin/posts/*',
        'admin/pages',
        'admin/pages/*',
        'admin/comments',
        'admin/comments/*',
        'admin/reviews',
        'admin/reviews/*',
        'admin/categores',
        'admin/categores/*',
        'admin/contacts',
        'admin/contacts/*',
        'admin/faqs',
        'admin/faqs/*',
        'admin/menus',
        'admin/menus/*',
        'admin/photos',
        'admin/photos/*',
        'admin/socials',
        'admin/socials/*',
        'admin/tags',
        'admin/tags/*'
    ]) }}" aria-controls="cms">
                <i class="link-icon icon-notebook"></i>
                <span class="link-title">{{__('CMS')}}</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse {{ show_class([
 'admin/posts',
        'admin/posts/*',
        'admin/pages',
        'admin/pages/*',
        'admin/comments',
        'admin/comments/*',
        'admin/reviews',
        'admin/reviews/*',
        'admin/categores',
        'admin/categores/*',
        'admin/contacts',
        'admin/contacts/*',
        'admin/faqs',
        'admin/faqs/*',
        'admin/menus',
        'admin/menus/*',
        'admin/photos',
        'admin/photos/*',
        'admin/socials',
        'admin/socials/*',
        'admin/tags',
        'admin/tags/*'
    ]) }}" id="cms">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{ url('admin/posts') }}" class="nav-link {{ active_class(['admin/posts','admin/posts/*']) }}">{{__('Posts')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/categores') }}" class="nav-link {{ active_class(['admin/categores', 'admin/categores/*']) }}">{{__('Categories')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/tags') }}" class="nav-link {{ active_class(['admin/tags','admin/tags/*']) }}">{{__('Tags')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/comments') }}" class="nav-link {{ active_class(['admin/comments', 'admin/comments/*']) }}">{{__('Comments')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/pages') }}" class="nav-link {{ active_class(['admin/pages', 'admin/pages/*']) }}">{{__('Pages')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/reviews') }}" class="nav-link {{ active_class(['admin/reviews', 'admin/reviews/*']) }}">{{__('Reviews')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/faqs') }}" class="nav-link {{ active_class(['admin/faqs', 'admin/faqs/*']) }}">{{__('FAQs')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/menus') }}" class="nav-link {{ active_class(['admin/menus', 'admin/menus/*']) }}">{{__('Menus')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/photos') }}" class="nav-link {{ active_class(['admin/photos', 'admin/photos/*']) }}">{{__('Gallery')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/socials') }}" class="nav-link {{ active_class(['admin/socials', 'admin/socials/*']) }}">{{__('Social Media')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/contacts') }}" class="nav-link {{ active_class(['admin/contacts', 'admin/contacts/*']) }}">{{__('Contact Us')}}</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">{{__('Options')}}</li>
      <li class="nav-item {{ active_class(['admin/admin-users', 'admin/admin-users/*', 'admin/settings', 'admin/translations', 'admin/plugins']) }}">
        <a class="nav-link" data-toggle="collapse" href="#email" role="button" aria-expanded="{{ is_active_route(['settings/*']) }}" aria-controls="email">
          <i class="link-icon" data-feather="settings"></i>
          <span class="link-title">{{__('Settings')}}</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['admin/admin-users', 'admin/admin-users/*', 'admin/settings', 'admin/translations', 'admin/plugins']) }}" id="email">
          <ul class="nav sub-menu">
              <li class="nav-item">
                  <a href="{{ url('admin/plugins') }}" class="nav-link {{ active_class(['admin/plugins','admin/plugins/*']) }}">{{__('Plugins')}}</a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('admin/admin-users') }}" class="nav-link {{ active_class(['admin/admin-users','admin/admin-users/*']) }}">{{__('Access')}}</a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('admin/translations') }}" class="nav-link {{ active_class(['admin/translations']) }}">{{__('Languages')}}</a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('admin/settings') }}" class="nav-link {{ active_class(['admin/settings']) }}">{{trans('admin.setting.actions.index')}}</a>
              </li>
          </ul>
        </div>
        </li>
    </ul>
  </div>
</nav>
