@extends('auth.layouts.app')
@section('content')
<div class="card-body p-0">
    <main class="main-content  mt-0">
        <section>
		
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('{{ asset('public/img/curved-images/curved6.jpg') }}')">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">{{ __('label.welcome')}}
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}" role="form">
                                        @csrf
                                        <div class="form-group row mb-3">
                                            <div class="col-md-12">
                                                <label>{{ __('label.email') }}</label>
                                                <input id="email" type="email"
                                                    class="input-box form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                    name="email" value="{{ old('email') }}"
                                                    placeholder="<?= trans('auth.enter_email') ?>" required>
                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback mt-2" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="col-md-12">
                                                <label>{{ __('label.password') }}</label>
                                                <input id="password" type="password"
                                                    class="input-box form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                    placeholder="<?= trans('auth.enter_password') ?>" name="password"
                                                    required>
                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="remember">
                                                        <?= trans('auth.remember_me') ?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn bg-gradient-info w-100 mb-0">
                                                    <?= trans('auth.login') ?>
                                                </button>
                                            </div>
                                        </div>
										<div class="form-group mt-2">
										{{trans('label.not_have_account')}}
										 <a href="{{asset('/register')}}">{{trans('label.register_here')}}</a>
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
  </div>	
    @endsection
