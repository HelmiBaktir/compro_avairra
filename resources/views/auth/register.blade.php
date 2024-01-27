@extends('layouts._auth')
@section('title','Register')
@section('content')
        <div class="container-fluid">
			<div class="row">
				<div class="vegas-container col-md-6 col-12 fxt-bg-img" id="vegas-slide" data-vegas-options='{"delay":5000, "timer":false,"animation":"kenburns", "transition":"swirlLeft", "slides":[{"src": "{{ asset('background/register.jpg') }}"}]}'>
					<div class="fxt-page-switcher">
						<a href="{{ route('login') }}" class="switcher-text1">Login</a>
						<a href="{{ route('register') }}" class="switcher-text1 active">Register</a>
					</div>
				</div>
				<div class="col-md-6 col-12 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-form">
                            <a href="{{ route('register') }}" class="fxt-logo"><img src="{{ asset('easton/images/auth-logo.png')}}" alt="Logo"></a>
                            <p> 
							<div class="fxt-transformY-50 fxt-transition-delay-1">
								<h2>Register</h2>
							</div>
							<div class="fxt-transformY-50 fxt-transition-delay-2">
								<p>Create Your Account!</p>
							</div>
							<form method="POST" action="{{ route('register') }}">
                                @csrf
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
                                        <i class="flaticon-user"></i>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email">
                                        <i class="flaticon-envelope"></i>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
										<i class="flaticon-padlock"></i>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
								</div>
                                <div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required autocomplete="new-password">			
                                        <i class="flaticon-eye"></i>                       
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<button type="submit" class="fxt-btn-fill"  onclick="redirectToLogin()">{{ __('Register') }}</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection

@section('scripts')
<script>
    const passwordInput = document.getElementById("password");
    const btnPasswordShowHidden = document.getElementById("btnPasswordShowHidden");
    btnPasswordShowHidden.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            $('#btnPasswordShowHidden').html(`
            <i class="ki-duotone ki-eye text-success fs-2">
                <i class="path1"></i>
                <i class="path2"></i>
                <i class="path3"></i>
            </i>`);
        } else {
            passwordInput.type = "password";
            $('#btnPasswordShowHidden').html(`
            <i class="ki-duotone ki-eye-slash text-success fs-2">
                <i class="path1"></i>
                <i class="path2"></i>
                <i class="path3"></i>
                <i class="path4"></i>
            </i>`);

        }
    });

    function redirectToLogin() {
        window.location.href = "{{ route('login') }}";
    }
</script>    
@endsection







<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

