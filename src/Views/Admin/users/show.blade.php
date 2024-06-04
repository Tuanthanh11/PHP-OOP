
@extends('layouts.master')

@section('title')
    Danh sách User
@endsection

@section('content')
    <div class="row justify-content-center">

        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h1 class="m-0">Chi tiet nguoi dung {{ $user['name'] }}</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="white_card position-relative mb_20">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 align-self-center">
                                        <img src="{{ asset($user['avatar']) }}" alt class="mx-auto d-block sm_w_100"
                                            height="300" />
                                    </div>

                                    <div class="col-lg-6 align-self-center">
                                        <div class="single-pro-detail">
                                            <h3 class="pro-title"><?= $user['name'] ?></h3>
                                            <p class="text-muted mb-0">Morden and good look model 2020</p>
                                            <ul class="list-inline mb-2 product-review">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star-half text-warning"></i></li>
                                                <li class="list-inline-item">4.5 (9830 reviews)</li>
                                            </ul>
                                            <h2 class="pro-price">
                                                $89.00 <span><del>$180.00</del></span><span
                                                    class="text-danger fw-bold ms-2">50% Off</span>
                                            </h2>
                                            <h6 class="text-muted font_s_13 mt-2 mb-1">Features :</h6>
                                            <ul class="list-unstyled pro-features border-0">
                                                <li>It is a long established fact that a reader will be distracted.</li>
                                                <li>Contrary to popular belief, Lorem Ipsum is not text.</li>
                                            </ul>
                                            <h6 class="text-muted font_s_13 d-inline-block align-middle me-2">Color :
                                            </h6>
                                            <div class="radio2 radio-info2 form-check-inline ms-2">
                                                <input type="radio" id="inlineRadio1" value="option1" name="radioInline"
                                                    checked />
                                                <label class="form-label" for="inlineRadio1"></label>
                                            </div>
                                            <div class="radio2 radio-dark2 form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="option2"
                                                    name="radioInline" />
                                                <label class="form-label" for="inlineRadio2"></label>
                                            </div>
                                            <div class="quantity mt-3">
                                                <input class="form-control form-control-sm" type="number" min="0"
                                                    value="0" id="example-number-input" />
                                                <a href class="btn green_bg text-white px-4 d-inline-block ">
                                                    <i class="fa fa-cart-plus me-2"></i>Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                

                <div class="white_card_body">
                    <div class="table-responsive">

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- <table class="table table-striped">
    <thead>
        <tr>
            <th>Truong</th>
            <th>Gia tri</th>

        </tr>
    </thead>
    <tbody>

        @foreach ($user as $field => $value)
        <tr>
            <td>{{ $field }}</td>
            <td>{{ $value }}</td>

        </tr>
        @endforeach

    </tbody>
</table> --}}


