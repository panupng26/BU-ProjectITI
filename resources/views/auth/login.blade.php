@extends('layout.login.app')

@section('content')
            <div class="card">
            <div class="card-body">
                <div class="login-wrapper my-auto">
                    <h1 class="login-title">เข้าสู่ระบบ</h1>
                    <form method="POST" action="{{ route('login') }}" autocomplete="off">
                    @if (Session::get('errorlogin'))
                                <div class="alert alert-danger">
                                    {{  Session::get('errorlogin')}}
                                </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="กรุณากรอกอีเมล" required autocomplete="email" autofocus>
                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="กรุณากรอกรหัสผ่าน" autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block login-btn">
                                        {{ __('Login') }}
                    </button>
                    </form>
                    <a href="{{route('password.request')}}" class="forgot-password-link">ลืมรหัสผ่าน</a>
                </div>
            </div>
            </div>
@endsection
