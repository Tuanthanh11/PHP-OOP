
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
                            <h1 class="m-0">Chi tiết sản phẩm {{ $product['name'] }}</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="white_card position-relative mb_20">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 align-self-center">
                                        <img src="{{ asset($product['img_thumbnail']) }}" alt class="mx-auto d-block sm_w_100"
                                            height="300" />
                                    </div>

                                    <div class="col-lg-6 align-self-center">
                                        <div class="single-pro-detail">
                                            <h2 class="pro-title"><?= $product['name'] ?></h3>
                                        
                                            <h3 class="pro-price">
                                                <?= $product['overview']?>
                                            </h2>
                                            <p class="text-muted font_s_13 mt-2 mb-1"><?= $product['content']?></p>
                                            <p class="text-muted font_s_13 mt-2 mb-1"><?= $product['created_at']?></p>
                                            <p class="text-muted font_s_13 mt-2 mb-1"><?= $product['updated_at']?></p>
                                            
                                            
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

        @foreach ($product as $field => $value)
        <tr>
            <td>{{ $field }}</td>
            <td>{{ $value }}</td>

        </tr>
        @endforeach

    </tbody>
</table> --}}


