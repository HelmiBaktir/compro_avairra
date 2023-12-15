@extends('layouts.auth')
@section('title','Login')
@section('content')
<div class="d-flex flex-column flex-lg-row flex-column-fluid">
    <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-1"
        style="background-image: url({{ asset('jeremia-assets/media/misc/auth-bg.png') }})">
        <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
        </div>
    </div>
    <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-2">
        <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            <div class="w-lg-500px p-10">
                <form class="form w-100" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-11">
                        <h1 class="text-dark fw-bolder mb-3">Selamat Datang!</h1>
                        <div class="text-gray-500 fw-semibold fs-6">Welcome To Content Managemet.</div>
                    </div>
                    <div class="fv-row mb-8">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" placeholder="Email Anda" value="{{ old('email') }}" name="email"
                            autocomplete="off" class="form-control bg-transparent" required />
                    </div>
                    <div class="fv-row mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <div class="input-group  mb-5">
                            <input id="password" type="password" placeholder="Kata Sandi" name="password" autocomplete="off" class="form-control bg-transparent" />
                            <span class="input-group-text bg-transparent " id="btnPasswordShowHidden"  status="hidden">
                                <i class="ki-duotone ki-eye-slash text-success fs-2">
                                    <i class="path1"></i>
                                    <i class="path2"></i>
                                    <i class="path3"></i>
                                    <i class="path4"></i>
                                </i>
                            </span>
                        </div>
                    </div>
                    @error('failed_login')
                    <div class="fv-plugins-message-container invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                    <div class="d-grid mb-10">
                        <button type="submit" id="submitBtn" class="btn btn-success">
                            Login
                        </button>
                    </div>
                </form>
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
