<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
@extends('layouts.app')

@section('content')

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" method="POST" action="{{ route('register') }}">
              @csrf
              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" required autofocus >
                <label for="inputUserame">Username</label>
                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                <label for="inputPassword">Password</label>
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" name="password_confirmation" placeholder="Password" required>
                <label for="inputConfirmPassword">Confirm password</label>
              </div>

              <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
              </button>
              <a class="d-block text-center mt-2 small" href="{{ route('login') }}">Sign In</a>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection