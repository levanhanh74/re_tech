@extends('LayoutAdmin.index')
@section('title')
    Admin Home
@endsection
@section('contents')
    <div class="row row-cols-lg-5 row-cols-md-2 row-cols-sm-2 g-2">
        <div class="col-lg-5 col-md-4 col-sm-2 col-xs-2">
            <div class="row">
                <div class="col-6 bg-danger">
                    <i class="fa-solid fa-cart-shopping text-white p-4"></i>
                </div>
                <div class="col-6 ">
                    <h5>{{ $ChkCAll->count() ? $ChkCAll->count() : 0 }}</h5>
                    Item CheckOut Cart
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-4 col-sm-2 col-xs-2">
            <div class="row">
                <div class="col-6 bg-danger"><i class="fa-solid text-white fa-comment p-4"></i></div>
                <div class="col-6">
                    <h5>{{ $cmtAll->count() ? $cmtAll->count() : 0 }}</h5>
                    Comment
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-4 col-sm-2 col-xs-2">
            <div class="row">
                <div class="col-6 bg-danger"><i class="fa-solid text-white fa-list p-4"></i></div>
                <div class="col-6">
                    <h5>{{ $cateAll->count() ? $cateAll->count() : 0 }}</h5>
                    Category
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-4 col-sm-2 col-xs-2">
            <div class="row">
                <div class="col-6 bg-danger"><i class="fa-solid text-white fa-boxes-packing fa-list p-4"></i></div>
                <div class="col-6">
                    <h5>{{ $prdAll->count() ? $prdAll->count() : 0 }}</h5>
                    Product
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-4 col-sm-2 col-xs-2">
            <div class="row">
                <div class="col-6 bg-danger"> <i class="fa-solid text-white fa-user p-4"></i></div>
                <div class="col-6">
                    <h5>{{ $userAll->count() ? $userAll->count() : 0 }}</h5>
                    User
                </div>
            </div>
        </div>
    </div>
@endsection
