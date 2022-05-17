@extends('layouts.master')

@section('title', 'Thanh toán thành công')
@section('head')
    @parent
    <link rel="stylesheet" href="css/payment-success.css">
@endsection

@section('sidebar')
    @parent
@stop
@section('content')
<main id="main">
    <img class="text-thanhtoanthanhcong" src="./img/text-thanhtoanthanhcong.png">
    <img class="alvin" src="./img/alvin.png">
    <div class="payment-success">
        <a class="btn-previous"><img src="./img/previous_btn.png"></a>
        <div class="list-card">
            <div class="card">
                <img class="card-qr-code" src="./img/maqr.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title1">ALT20210501</h4>
                    <div class="ticket-address">VÉ CỔNG</div>
                    <div class="bagach">---</div>
                    <div class="use-date">Ngày sử dụng: 31/05/2021</div>
                    <img src="./img/tick.png" class="tick">
                </div>
            </div>
            <div class="card">
                <img class="card-qr-code" src="./img/maqr.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title1">ALT20210501</h4>
                    <div class="ticket-address">VÉ CỔNG</div>
                    <div class="bagach">---</div>
                    <div class="use-date">Ngày sử dụng: 31/05/2021</div>
                    <img src="./img/tick.png" class="tick">
                </div>
            </div>
            <div class="card">
                <img class="card-qr-code" src="./img/maqr.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title1">ALT20210501</h4>
                    <div class="ticket-address">VÉ CỔNG</div>
                    <div class="bagach">---</div>
                    <div class="use-date">Ngày sử dụng: 31/05/2021</div>
                    <img src="./img/tick.png" class="tick">
                </div>
            </div>
            <div class="card">
                <img class="card-qr-code" src="./img/maqr.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title1">ALT20210501</h4>
                    <div class="ticket-address">VÉ CỔNG</div>
                    <div class="bagach">---</div>
                    <div class="use-date">Ngày sử dụng: 31/05/2021</div>
                    <img src="./img/tick.png" class="tick">
                </div>
            </div>
        </div>
        <div class="footer">
            <span id="amount">Số lượng: 12 vé</span>
            <span id="page-count">Trang 1/3</span>
        </div>
        <a class="btn-next"><img src="./img/next_btn.png"></a>
    </div>
    <div class="list-btn">
        <button class="btn-taive"></button>
        <button class="btn-guiemail"></button>
    </div>
</main>
@endsection
