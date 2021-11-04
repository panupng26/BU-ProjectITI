@extends('layout.login.app')

@section('content')
    <div class="card">
    <div class="card-body">
        <div class="login-wrapper my-auto">
            <h1 class="login-title">{{ __('ลืมรหัสผ่าน') }}</h1>
            <form method="POST" action="{{ route('password.email') }}" autocomplete="off">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
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
            <button type="submit" class="btn btn-block login-btn">
                                {{ __('ส่งไปยังอีเมล') }}
            </button>
            </form>
        </div>
    </div>
    </div>
@endsection