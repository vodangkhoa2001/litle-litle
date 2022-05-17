@extends('layouts.master')

@section('title', 'Trang chủ')

@section('head')
    @parent
@endsection
@section('sidebar')
    @parent
@stop

@section('content')
<div id="main">
    <div class="logo-dam-sen-park">
        <img src="img/logo_dam_sen_park.png" />
        <div class="dam-sen-park-text">
            <img src="img/dam_sen_text.png" />
            <img src="img/park_text.png" />
        </div>
    </div>
    <div class="four-child">
        <img src="img/4_ban_nho.png" />
    </div>
    <div class="content">
        <!-- text -->
        <div class="info-ticket">
            <img class="bg-text" src="img/text.png" />
            <div class="text text-1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione expedita dolores a quas eveniet officia.
            </div>
            <div class="text text-2">
                Quasi, quis molestiae asperiores aliquid odit veniam dicta odio? Laboriosam consequuntur iusto rem quidem qui natus ratione mollitia.
            </div>
            <ul>
                <li>
                    <img src="img/star.png" class="star-icon" />Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                </li>
                <li>
                    <img src="img/star.png" class="star-icon" />Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                </li>
                <li>
                    <img src="img/star.png" class="star-icon" />Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                </li>
                <li>
                    <img src="img/star.png" class="star-icon" />Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                </li>
            </ul>
            <div class="lisa-img">
                <img src="img/lisa.png" />
            </div>
        </div>
        <!-- form book ticket -->
        <img class="match" src="img/khungnoi.png" />
        <form method="post" action="{{ route('payment') }}" autocomplete="off" class="form">
            @csrf
            <img class="banner" src="img/banner_01.png" />
            <img class="bg-form" src="img/form.png" />
            <div id="ticket">
                <!-- type -->
                <div class="ticket-type">
                    <input type="text" class="ticket-type-input input" value="Vé gia đình" />
                    <button type="button" class="btn btn-select">
            <i class="fa-solid fa-sort-down icon-down"></i>
          </button>
                </div>
                <!-- amount & date -->
                <div class="amount-date">
                    <input name="amount" id="amount-ticket" class="input amount" placeholder="Số lượng vé" type="number" />
                    <input name="date" id="book-date" class="input date" placeholder="Ngày sử dụng" type="text" />
                    <button type="button" onclick="show_dp();" id="btn-date" class="btn btn-date">
            <i class="fa-solid fa-calendar-day icon-date"></i>
          </button>
                </div>
                <!-- name -->
                <input type="text" name="name" id="name" placeholder="Họ và tên" autocomplete="off" class="input input-full" />
                <!-- phone -->
                <input type="number" name="phone" id="phone" placeholder="Số điện thoại" class="input input-full" />
                <!-- email -->
                <input type="email" name="email" id="email" placeholder="Địa chỉ email" class="input input-full" />
                <!-- button book ticket -->
                <button type="submit" class="btn-book">
                <img src="img/dat_ve_text.png" />
            </button>
            </div>
        </form>
        <!-- end form -->
    </div>
    <div class="hot-air-balloon-1">
        <img src="img/khinh_khi_cau1.png" />
    </div>
    <div class="hot-air-balloon-2">
        <img src="img/khinh_khi_cau2.png" />
    </div>
    <div class="hot-air-balloon-3">
        <img src="img/khinh_khi_cau3.png" />
    </div>
    <div class="hot-air-balloon-4">
        <img src="img/khinh_khi_cau4.png" />
    </div>
    <div class="hot-air-balloon-5">
        <img src="img/khinh_khi_cau5.png" />
    </div>
    <div class="hot-air-balloon-6">
        <img src="img/khinh_khi_cau6.png" />
    </div>
</div>
@stop
@section('script')
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" />
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script type="text/javascript">
    jQuery(function($) {
        $.datepicker.regional["vi-VN"] = {
            closeText: "Đóng",
            prevText: "Trước",
            nextText: "Sau",
            currentText: "Hôm nay",
            monthNames: [
                "Tháng 1,",
                "Tháng 2,",
                "Tháng 3,",
                "Tháng 4,",
                "Tháng 5,",
                "Tháng 6,",
                "Tháng 7,",
                "Tháng 8,",
                "Tháng 9,",
                "Tháng 10,",
                "Tháng 11,",
                "Tháng 12,"
            ],
            monthNamesShort: [
                "1",
                "2",
                "3",
                "4",
                "5",
                "6",
                "7",
                "8",
                "9",
                "10",
                "11",
                "12"
            ],
            dayNames: [
                "Chủ nhật",
                "Thứ hai",
                "Thứ ba",
                "Thứ tư",
                "Thứ năm",
                "Thứ sáu",
                "Thứ bảy"
            ],
            dayNamesShort: ["CN", "Hai", "Ba", "Tư", "Năm", "Sáu", "Bảy"],
            dayNamesMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
            weekHeader: "Tuần",
            dateFormat: "dd/mm/yy",
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ""
        };

        $.datepicker.setDefaults($.datepicker.regional["vi-VN"]);
    });
    $(function() {
        $("#book-date").datepicker({
            dateFormat: "dd/mm/yy",
            minDate: "today"
        });
    });

    function show_dp() {
        $("#book-date").datepicker("show");
    }
</script>
@stop
