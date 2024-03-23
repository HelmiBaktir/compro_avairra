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
							<div class="fxt-transformY-50 fxt-transition-delay-1">
								<h2>Register</h2>
							</div>
							<div class="fxt-transformY-50 fxt-transition-delay-2">
								<p>Create Your Account, If You Staff PT.Avairra Indo Karya!</p>
							</div>
							<form id="registerForm" method="POST" action="{{ route('register') }}">
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
                                        <input id="registerCode" type="password" class="form-control @error('registerCode') is-invalid @enderror" name="registerCode" placeholder="Register Code" required autocomplete="registerCode">
                                        <i class="flaticon-padlock"></i>
                                        @error('registerCode')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<button type="submit" class="fxt-btn-fill" >{{ __('Register') }}</button>
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
    // Add script for sweetalert
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 2000
        });
    @endif

    @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: '{{ session('error') }}',
            showConfirmButton: false,
            timer: 2000
        });
    @endif
</script>
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

    // function redirectToLogin() {
    //     window.location.href = "{{ route('login') }}";

    //     Swal.fire({
    //         icon: 'success',
    //         title: 'Registration Successful',
    //         text: 'You have successfully registered!',
    //         showConfirmButton: false,
    //         timer: 2000 // Close after 2 seconds
    //     });
    // }
</script>    
@endsection