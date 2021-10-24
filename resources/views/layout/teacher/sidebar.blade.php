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
      <li class="nav-item {{ active_class(['teacher']) }}">
        <a href="{{ url('/teacher') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">{{__('Dashboard')}}</span>
        </a>
      </li>
      <li class="nav-item nav-category">{{__('Content')}}</li>
        <li class="nav-item {{ active_class([
        'teacher/courses',
        'teacher/courses/*',
    ]) }}">
            <a class="nav-link" href="{{url('teacher/courses')}}" aria-expanded="{{ is_active_route([
        'teacher/courses',
        'teacher/courses/*',
    ]) }}" aria-controls="courses">
                <i class="link-icon icon-badge"></i>
                <span class="link-title">{{__('Courses')}}</span>
            </a>
        </li>
        <li class="nav-item {{ active_class([
        'teacher/users',
        'teacher/users/*',
        'teacher/homework',
        'teacher/homework/*',
        'teacher/homeworks-sloves',
        'teacher/homeworks-sloves/*',
        'teacher/tests',
        'teacher/tests/*',
        'teacher/tests-sloves',
        'teacher/tests-sloves/*'
    ]) }}">
            <a class="nav-link" data-toggle="collapse" href="#students" role="button" aria-expanded="{{ is_active_route([
        'teacher/users',
        'teacher/users/*',
        'teacher/homework',
        'teacher/homework/*',
        'teacher/homeworks-sloves',
        'teacher/homeworks-sloves/*',
        'teacher/tests',
        'teacher/tests/*',
        'teacher/tests-sloves',
        'teacher/tests-sloves/*'
    ]) }}" aria-controls="students">
                <i class="link-icon icon-eyeglass"></i>
                <span class="link-title">{{__('Students')}}</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse {{ show_class([
            'teacher/users',
        'teacher/users/*',
        'teacher/homework',
        'teacher/homework/*',
        'teacher/homeworks-sloves',
        'teacher/homeworks-solves/*',
        'teacher/tests',
        'teacher/tests/*',
        'teacher/tests-sloves',
        'teacher/tests-sloves/*'
    ]) }}" id="students">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{ url('teacher/users') }}" class="nav-link {{ active_class(['teacher/users','teacher/users/*']) }}">{{__('Your Students')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('teacher/homework') }}" class="nav-link {{ active_class(['teacher/homework', 'teacher/homework/*']) }}">{{__('Homeworks')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('teacher/homeworks-solves') }}" class="nav-link {{ active_class(['teacher/homeworks-solves','teacher/homeworks-solves/*']) }}">{{__('Homework Solves')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('teacher/tests') }}" class="nav-link {{ active_class(['teacher/tests', 'teacher/tests/*']) }}">{{__('Tests')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('teacher/tests-solves') }}" class="nav-link {{ active_class(['teacher/tests-solves', 'teacher/tests-solves/*']) }}">{{__('Tests Solves')}}</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
  </div>
</nav>
