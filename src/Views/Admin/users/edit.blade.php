@extends('layouts.master')

@section('title')
    Cập nhật người dùng: {{ $user['name'] }}
@endsection

@section('content') <h1>Cập nhật người dùng: {{ $user['name'] }}
    </h1>

    <div class=" row col-lg-12">
        <div class="white_card card_height_100 mb_30">
            @if (!empty($_SESSION['error']))
                <div class="alert-alert-warning theme_color_3">
                    <ul>
                        @foreach ($_SESSION['error'] as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @php
                        unset($_SESSION['error']);
                    @endphp
                </div>
            @endif

            <form action="{{ url("admin/users/{$user['id']}/update") }}" enctype="multipart/form-data" method="POST">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name"
                        value="{{ $user['name'] }}" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email"
                        value="{{ $user['email'] }}" name="email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="avatar" class="form-label">Avatar:</label>
                    <input type="file" class="form-control" id="avatar" placeholder="Enter avatar" name="avatar">
                    <img src="{{ asset($user['avatar']) }}" alt="" width="100px">
                </div>
                <div class="mb-3 mt-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="text" class="form-control" id="password" placeholder="Enter password" name="password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
