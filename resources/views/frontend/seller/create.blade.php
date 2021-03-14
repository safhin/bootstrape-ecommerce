@extends('frontend.layouts.app')

@section('content')
    <!-- ========================= SECTION PAGETOP ========================= -->
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Create Product</h2>
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->
    <!-- ========================= SECTION CONTENT END// ========================= -->
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <header class="card-header">
                        <h4 class="card-title mt-2">Product</h4>
                    </header>
                    <article class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control" name="price">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" class="form-control" name="category">
                            </div>
                            <div class="form-group">
                                <label>Brand</label>
                                <input type="text" class="form-control" name="brand">
                            </div>
                            <div class="form-group">
                                <label>Details</label>
                                <textarea class="form-control" name="details" id="" cols="30" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block">Save</button>
                            </div>
                        </form>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection