@extends('layouts.master')

@section('title', 'Sự kiện')
@section('head')
    @parent
    <link rel="stylesheet" href="css/event.css">
@endsection

@section('sidebar')
    @parent
@stop
@section('content')
<div class="flag-left">
    <img src="./img/flag-left.png">
</div>
<div class="text-title">
    <img src="img/sukiennoibat.png">
</div>
<div class="flag-right">
    <img src="./img/flag-right.png">
</div>
<!-- main -->
<div id="main">
    <div class="paper"></div>
    <a class="btn-prev"><img src="./img/previous_btn.png"></a>
    <div class="event-list">
        @for ($i = 0; $i<4;$i++)
        <div class="event-tag">
            <img src="./img/dam-sen-1.png">
            <div class="event-content">
                <h1 class="title">Sự kiện 1</h1>
                <p class="sub-title">Đầm sen Park</p>
                <p class="time-takes-place"><i class="fa-solid fa-calendar-days icon"></i> 30/04/2022 - 2/5/2022</p>
                <p class="price">25.000 VNĐ</p>
            </div>
            <div class="event-footer">
                <a href="{{ route('event-detail') }}" class="btn-detail">
                    <img src="./img/btn-detail.png">
                </a>
            </div>
        </div>
        @endfor
    </div>
        {{-- <div class="event-tag">
            <img src="./img/dam-sen-1.png">
            <div class="event-content">
                <h1 class="title">Sự kiện 1</h1>
                <p class="sub-title">Đầm sen Park</p>
                <p class="time-takes-place"><i class="fa-solid fa-calendar-days icon"></i> 30/04/2022 - 2/5/2022</p>
                <p class="price">25.000 VNĐ</p>
            </div>
            <div class="event-footer">
                <a href="event-detail.html" class="btn-detail">
                    <img src="./img/btn-detail.png">
                </a>
            </div>
        </div>
        <div class="event-tag">
            <img src="./img/dam-sen-1.png">
            <div class="event-content">
                <h1 class="title">Sự kiện 1</h1>
                <p class="sub-title">Đầm sen Park</p>
                <p class="time-takes-place"><i class="fa-solid fa-calendar-days icon"></i> 30/04/2022 - 2/5/2022</p>
                <p class="price">25.000 VNĐ</p>
            </div>
            <div class="event-footer">
                <a href="event-detail.html" class="btn-detail">
                    <img src="./img/btn-detail.png">
                </a>
            </div>
        </div>

        <div class="event-tag">
            <img src="./img/dam-sen-1.png">
            <div class="event-content">
                <h1 class="title">Sự kiện 1</h1>
                <p class="sub-title">Đầm sen Park</p>
                <p class="time-takes-place"><i class="fa-solid fa-calendar-days icon"></i> 30/04/2022 - 2/5/2022</p>
                <p class="price">25.000 VNĐ</p>
            </div>
            <div class="event-footer">
                <a href="event-detail.html" class="btn-detail">
                    <img src="./img/btn-detail.png">
                </a>
            </div>
        </div>

        <div class="event-tag">
            <img src="./img/dam-sen-1.png">
            <div class="event-content">
                <h1 class="title">Sự kiện 1</h1>
                <p class="sub-title">Đầm sen Park</p>
                <p class="time-takes-place"><i class="fa-solid fa-calendar-days icon"></i> 30/04/2022 - 2/5/2022</p>
                <p class="price">25.000 VNĐ</p>
            </div>
            <div class="event-footer">
                <a href="event-detail.html" class="btn-detail">
                    <img src="./img/btn-detail.png">
                </a>
            </div>
        </div>
    </div> --}}
    <a class="btn-next"><img src="./img/next_btn.png"></a>
@stop
