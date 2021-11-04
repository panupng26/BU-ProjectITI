 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('teacher.Requeststudent')}}" class="nav-link">คำร้องของนักศึกษา</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('teacher.Checkpeperstudent')}}" class="nav-link">ตรวจสอบเอกสารนักศึกษา</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('teacher.Listproject')}}" class="nav-link">รายชื่อโครงงานที่ดูแล</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('teacher.Listprojectall')}}" class="nav-link">รายชื่อโครงงานในระบบทั้งหมด</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   สวัสดีคุณ {{Auth::user()->name}}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
    </ul>
  </nav>
  <!-- /.navbar -->
