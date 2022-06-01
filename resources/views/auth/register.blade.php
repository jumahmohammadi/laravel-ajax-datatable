@extends('auth.layouts.app')

@section('content')
<div class="card-body p-0">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
         <div class="container">
           <div class="row ">
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
				   <h3 class="font-weight-bolder text-info text-gradient">{{ __('label.register') }}</h3>
			    </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-12 text-md-right">{{ __('label.name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-12  text-md-right">{{ __('label.email') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-12  text-md-right">{{ __('label.password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-12 text-md-right">{{ __('label.password_conf') }}</label>
                             <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                             </div>
						</div>

                        <div class="form-group  mb-0">
                            <div class="col-md-12 offset-md-12">
                                <button type="submit" class="btn bg-gradient-info w-100 mb-0">
                                    {{ __('label.register') }}
                                </button>
                            </div>
                        </div>
						
						<div class="form-group mt-2">
						   {{trans('label.have_account')}}
						   <a href="{{asset('/login')}}">{{trans('label.login_here')}}</a>
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
