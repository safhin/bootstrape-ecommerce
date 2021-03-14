@extends('frontend.layouts.app')

@section('content')
     <!-- ========================= SECTION PAGETOP ========================= -->
     <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Seller Registration</h2>
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->
    <!-- ========================= SECTION CONTENT END// ========================= -->
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <header class="card-header">
                        <h4 class="card-title mt-2">Sign up</h4>
                    </header>
                    <article class="card-body">
                        <form action="{{ route('seller.signUp') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name">
                                @if ($errors->has('name'))
                                    <p style="color: red">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" name="email">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                                @if ($errors->has('email'))
                                    <p style="color: red">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="phone" class="form-control" name="phone">
                                @if ($errors->has('phone'))
                                    <p style="color: red">{{ $errors->first('phone') }}</p>
                                @endif
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="city">
                                    @if ($errors->has('city'))
                                        <p style="color: red">{{ $errors->first('city') }}</p>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Country</label>
                                    <input class="form-control" type="text" name="country">
                                    @if ($errors->has('country'))
                                        <p style="color: red">{{ $errors->first('country') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Create password</label>
                                <input class="form-control" type="password" name="password">
                                @if ($errors->has('password'))
                                    <p style="color: red">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Register </button>
                            </div>
                            <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>
                        </form>
                    </article>
                    <div class="border-top card-body text-center">Have an account? <a href="{{ route('seller.login') }}">Log In</a></div>
                </div>
            </div>
        </div>
    </section>
@endsection