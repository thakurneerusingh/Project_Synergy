@extends('auth.layout_1')
  
@section('content')
<section>
    <div class="container">
<div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6">
                <div class="logindata">
                    <h4>Login Page</h4>
                    @if (session('success'))
                        <div class="alert alert-danger  w-100" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <!-- @if ($message = Session::get('success'))
                    <div class="alert alert-success w-25">
                    <p>{{ $message }}</p>
                    </div>
                    @endif -->
        <form action="{{ route('login.post') }}" method="POST">
                @csrf
  <div class="form-group">
  <input type="text" id="email_address" class="form-control login_text mt-5" placeholder="Email Address" name="email" >
  @error('email')
        <div class="alert text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group mt-4">
  <input type="password" id="password" class="form-control login_text" placeholder="Password" name="password">
  @error('password')
        <div class="alert text-danger ">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-check mt-4">
    <input type="checkbox" class="form-check-input " id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="btn_submit">
  <button type="submit" class="btn btn-primary">Login</button>
  </div>
    </form>
            </div>
        </div>
    </div>
</div>
</section>

@endsection