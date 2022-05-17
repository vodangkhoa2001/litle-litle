@extends('layouts.master')

@section('title', 'Liên hệ')

@section('head')
    @parent
    <link rel="stylesheet" href="css/contact.css">
@endsection

@section('sidebar')
    @parent
@stop
@section('content')
<div id="main">
    <div class="text-title">
        <img src="./img/text-lienhe.png">

    </div>
    <img class="alex" src="./img/ThangTocNau.png">
    <div class="contact">
        <div class="contact-form">
            <div class="paragraph-lienhe">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.</div>
            <form class="form-contact">
                <div class="group-contact">
                    <input type="text" class="input input-38" placeholder="Tên">
                    <input type="text" class="input input-60" placeholder="Email">
                </div>
                <div class="group-contact">
                    <input type="text" class="input input-38" placeholder="Số điện thoại">
                    <input type="text" class="input input-60" placeholder="Địa chỉ">
                </div>
                <textarea class="input-mess input" placeholder="Lời nhắn"></textarea>
                <input type="submit" value="" class="btn-send-contact">
            </form>
        </div>
        <div class="group-address">
            <div class="address">
                <img class="icon" src="./img/address-icon.png">

                <div class="text-content text-small">
                    <h3 class="title">Địa chỉ:</h3>
                    <p class="content-title">86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</p>
                </div>

            </div>
            <div class="address">
                <img class="icon" src="./img/email-icon.png">

                <div class="text-content text-small">
                    <h3 class="title">Email:</h3>
                    <p class="content-title">investigate@your-site.com</p>
                </div>

            </div>
            <div class="address">
                <img class="icon" src="./img/phone-icon.png">

                <div class="text-content text-small">
                    <h3 class="title">Điện thoại:</h3>
                    <p class="content-title">+84 35 5501 613</p>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection
