@include('backend.layout.headerFront')
@include('sweetalert::alert')
<h3 class="text-center mt-5 mb-4">
    <a href="index.html" class="d-block auth-logo">
        <img src="assets/images/logo-dark.png" alt="" height="30" class="auth-logo-dark">
        <img src="assets/images/logo-light.png" alt="" height="30" class="auth-logo-light">
    </a>
</h3>

<div class="p-3">
    <h4 class="text-muted font-size-18 mb-1 text-center">Welcome Back !</h4>
    <p class="text-muted text-center">Sign in to continue to Lexa.</p>
    <form class="form-horizontal mt-4" id="formAuthentication" method="POST" action="{{ route('login.action') }}">
        @csrf

        <div class="mb-3">
            <label for="Email">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" id="email" name="email" placeholder="Enter your email" autofocus>
        </div>
        <div class="mb-3 password-input-container">
            <label for="userpassword">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror password-input" id="txtPasswordLogin" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password">
                                    <i class="toggle-password fa fa-eye"></i>
                                    
        </div>
        <div class="mb-3 row mt-4">
            <div class="col-6">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customControlInline">
                    <label class="form-check-label" for="customControlInline">Remember me
                    </label>
                </div>
            </div>
            <div class="col-6 text-end">
                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
            </div>
        </div>
        <div class="form-group mb-0 row">
            <div class="col-12 mt-4">
                <a href="forgetPassword" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
            </div>
        </div>
    </form>
</div>
</div>
</div>
<div class="mt-5 text-center">
    <p>Don't have an account ? <a href="pages-register.html" class="text-primary"> Signup Now
        </a></p>
    ©
    <script>
        document.write(new Date().getFullYear())
    </script> Lexa <span class="d-none d-sm-inline-block"> - Crafted with <i
            class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
</div>
@include('backend.layout.footerFront')