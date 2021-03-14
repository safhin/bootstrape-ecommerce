@extends('frontend.layouts.app')

@section('content')
     <!-- ========================= SECTION PAGETOP ========================= -->
     <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Seller Login</h2>
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->
    <!-- ========================= SECTION CONTENT END// ========================= -->
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <header class="card-header">
                        <h4 class="card-title mt-2">Login</h4>
                    </header>
                    <article class="card-body">
                        <form action="{{ route('seller.authenticate') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" name="email">
                                @if ($errors->has('email'))
                                    <p style="color: red">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Login </button>
                            </div>
                        </form>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection