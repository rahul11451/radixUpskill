@include('layout.header')
<section class="my-5">
    <h3 class="text-center text-success mt-5 pt-5">registrationForm</h3>
    <div class="container py-3 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card border border-danger border-2">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp" alt="login form" class="img-fluid h-100 rounded" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black wow fadeInUp" data-wow-delay="0.1s">
                  <form action="{{url('registrationForm')}}" method="post" id="registerForm">
                    @csrf
                    <div class="d-flex align-items-center mb-1 pb-1">
                      <i class="fas fa-cubes fa-2x me-3 loginLogo "></i>
                      <span class="h1 fw-bold mb-0 ">Logo</span>
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example16">Name <span class="text-danger">*</span></label>
                      <div class="input-group">
                        <input type="text" value="" id="name" name="name" class="form-control border  border-dark rounded-0" />
                      </div>
                      {{-- <span class="text-danger erName"><?php echo $erName; ?></span> --}}
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="">Email address <span class="text-danger">*</span></label>
                      <div class="input-group">
                        <input type="email" value="" id="email" name="email" class="form-control border  border-dark rounded-0 " />
                      </div>
                      {{-- <span class="text-danger erEmail"><?php echo $erEmail ?></span> --}}
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example27">Password <span class="text-danger">*</span></label>
                      <div class="input-group">
                        <input type="password" value="" id="regiPass" name="password" class="form-control border  border-dark border-end-0 rounded-0" />
                        <div class="input-group-append">
                          <span class="fa fa-eye text-center input-group-text btn border border-start-0 border-dark rounded-0 togglePassword"></span>
                        </div>
                      </div>
                      {{-- <span class="text-danger erRegiPass"><?php echo $erPassword; ?></span> --}}
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example27">Re-enter Password <span class="text-danger">*</span></label>
                      <div class="input-group">
                        <input type="password" value="" id="password_confirmation" name="password_confirmation" class="form-control border  border-dark border-end-0 rounded-0" />
                        <div class="input-group-append">
                          <span class="fa fa-eye text-center input-group-text btn border border-start-0 border-dark rounded-0 togglePassword"></span>
                        </div>
                      </div>
                      {{-- <span class="text-danger erRegiRePass"><?php echo $erRePassword; ?></span> --}}
                    </div>
                    {{-- <div class="form-outline mb-4 user d-none">
                      <label class="form-label" for=""> OTP <span class="text-danger">*</span></label>
                      <div class="">
                        <input type="text" value="" id="userOtp" name="otp" class="border  border-dark rounded-0 " />
                      </div> --}}
                      {{-- <span class="text-danger successOtp"><?php echo $erOtp; ?></span> --}}
                    {{-- </div> --}}
                    <div class="mb-4 d-flex">
                      <input type="text" id="randOtp" hidden value="">
                      <div class="inputData me-3">
                        <button type="submit" class="btn btn-success py-2 px-3 btn-block">Register</button>
                        {{-- <input id="verification" class=" btn btn-success py-2 px-3 btn-block " type="submit" name="verification" value="Verification"> --}}
                      </div>
                      <a href="{{url('/')}}" class=" btn btn-danger py-2 px-3 btn-block">Cancle</a>
                    </div>
                    <p class="loginMessage">Already have an account? <a href="{{route('login')}}" class="loginLink">Login here</a></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<script src="../js/validation.js"></script>
<script src="../js/register.js"></script>
@include('layout.footer')