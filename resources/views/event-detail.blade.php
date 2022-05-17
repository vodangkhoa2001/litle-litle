@extends('layouts.master')

@section('title', 'Chi tiết sự kiện')
@section('head')
    @parent
    <link rel="stylesheet" href="css/event-detail.css">
@endsection

@section('sidebar')
    @parent
@stop
@section('content')
<div class="text-title">
    Sự kiện 1
</div>
<div class="flag-left">
    <img src="img/flag-left.png" />
</div>
<div class="flag-right">
    <img src="img/flag-right.png" />
</div>
<!-- main -->
<div id="main">
    <div class="paper"></div>
    <img class="event-frame-content" src="img/text-frame.png" />
    <div class="event-frame-content">
        <div class="event-info">
            <img src="img/vong-quay.png" />
            <div class="event-content">
                <h1 class="title">Sự kiện 1</h1>
                <p class="sub-title">Đầm sen Park</p>
                <p class="time-takes-place">
                    <i class="fa-solid fa-calendar-days icon"></i> 30/04/2022 - 2/5/2022
                </p>
                <p class="price">25.000 VNĐ</p>
            </div>
        </div>
        <div class="event-info">
            <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae
        quaerat rerum quo unde dolorum fuga totam quos quod harum. Vero quod
        sapiente eligendi maiores, saepe neque adipisci ipsam repellendus
        officiis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
        Beatae quaerat rerum.</span
      >
    </div>
    <div class="event-info">
      <img src="img/dam-sen-1.png" />
      <span>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
        accusantium cupiditate in illum vero sit nisi eaque? Blanditiis
        dicta, rerum.
      </span>
        </div>
        <div class="event-info">
            <span>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
        accusantium cupiditate in illum vero sit nisi eaque? Blanditiis
        dicta, rerum.
      </span>
            <img src="img/dam-sen-1.png" />
        </div>
    </div>
</div>
@stop
