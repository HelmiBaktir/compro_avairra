@extends('layouts._auth')
@section('title','Login')
@section('content')
    <div class="container-fluid">
			<div class="row">
				<div class="vegas-container col-md-6 col-12 fxt-bg-img" id="vegas-slide" data-vegas-options='{"delay":5000, "timer":false,"animation":"kenburns", "transition":"swirlLeft", "slides":[{"src": "{{ asset('background/login.jpg') }}"}]}'>
					<div class="fxt-page-switcher">
						<a href="{{ route('login') }}" class="switcher-text1 active">Login</a>
						<a href="{{ route('register') }}" class="switcher-text1">Register</a>
					</div>
				</div>
				<div class="col-md-6 col-12 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-form">
                            <a href="{{ route('login') }}" class="fxt-logo"><img src="{{ asset('easton/images/auth-logo.png')}}" alt="Logo"></a>
                            <p> 
							<div class="fxt-transformY-50 fxt-transition-delay-1">
								<h2>WELCOME</h2>
							</div>
							<div class="fxt-transformY-50 fxt-transition-delay-2">
								<p>Management Content of PT. Avairra</p>
							</div>
							<form method="POST" action="{{ route('login') }}">
                                @csrf
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-4">
										<input id ="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus>
										<i class="flaticon-envelope"></i>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-5">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                                        <i class="flaticon-padlock"></i>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-6">
										<div class="fxt-content-between">
											<button type="submit" class="fxt-btn-fill">{{ __('Login') }}</button>
											<a href="forgot-password-29.html" class="switcher-text2">Forgot Password</a>
										</div>
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
</script>   
@endsection
