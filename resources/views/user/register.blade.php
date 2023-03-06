@extends('layouts.app')
@section('konten')


<div class="row">
        <form action="{{ route('register.action') }}" method="POST">
            @csrf
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example1" class="form-control" name="name" value="{{ old('name') }}"/>
                    <label class="form-label" for="form3Example3">Name</label>
                    @error('name')
                <label for="" class="text-danger">{{ $message }}</label>
                @enderror
                  </div>
                </div>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="typeEmail" class="form-control" name="email"/>
                <label class="form-label">Email address</label>
                @error('email')
                <label for="" class="text-danger">{{ $message }}</label>
                @enderror
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" name="password" />
                <label class="form-label" for="form3Example4">Password</label>
                @error('password')
                <label for="" class="text-danger">{{ $message }}</label>
                @enderror
              </div>

              <!-- Password Confirm Input -->
              <div class="form-outline mb-4">
                <input type="password" id="typePassword" id="form3Example4" class="form-control" name="password_confirm" />
                <label class="form-label" for="form3Example4">Password Confirm</label>
                @error('password_confirm')
                <label for="" class="text-danger">{{ $message }}</label>
                @enderror
              </div>

              <!-- Checkbox Remember Me -->
              <div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">Remember Me</label>
                </div>

                <div class="form-group nt-2 mb-2">
                    <div class="captcha">
                    </div>
                        <span>{!! captcha_img('mini')!!}</span>
                        <button type="button" class="btn btn-danger" id="reload">
                            &#x21bb;
                        </button>
                    </div>
              </div>

                    <!-- Captcha Input -->
              <div class="form-outline mb-4">
                <input type="captcha" id="form3Example3" class="form-control" name="captcha" />
                <label class="form-label" for="form3Example3">Enter Captcha</label>
                @error('captcha')
                <label for="" class="text-danger">{{ $message }}</label>
                @enderror
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">Sign up
              </button>

              <script>

                $('#reload').click(function({
                    $.ajax({
                        type:'GET',
                        url:'reload-captcha'
                        success:function(data){
                            $(".captcha span").html(data.captcha)
                        }
                    });
                });

              </script>

              <!-- Register buttons -->
              <div class="text-center">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
