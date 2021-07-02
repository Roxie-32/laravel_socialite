@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group-row">
                            <div class="col-md-6 offset-md-3">
                                <a href="{{route('login.google')}}" class="btn btn-block btn-danger">Login with Google</a>
                                <a href="{{route('login.facebook')}}" class="btn btn-block btn-primary">Login with Facebook</a>
                                <a href="{{route('login.github')}}" class="btn btn-block btn-dark">Login with Github</a>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                              

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
