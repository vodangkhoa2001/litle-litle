@extends('layouts.master')

@section('head')
    @parent
    <link rel="stylesheet" href="css/payment.css">
@endsection
@section('title', 'Đặt vé')


@section('sidebar')
    @parent
@stop
@section('content')
<div id="main">
    <div class="text-title">
      <img src="./img/text-thanhtoan.png" />
    </div>
    <div class="content">
      <!-- text -->
      <div class="info-ticket">
        <img class="bg-text" src="img/text.png" />
        <div class="trini-img">
          <img src="img/trini.png" />
        </div>
        <div class="banner-pay-info">
          <img src="img/vecong-vegiadinh.png" />
        </div>
        <div class="entered-info">
          <div class="group-3-input">
            <div class="group-input" style="width: 55%;">
              <label for="price">Số tiền thanh toán</label><br />
              <input
                class="input"
                type="text"
                name="price"
                id="price"
                readonly
                value="360.000 vnđ"
                style="width: 155px;"
              />
            </div>
            <div class="group-input">
              <label for="amount-ticket">Số lượng vé</label><br />
              <input
                class="input"
                type="number"
                name="amount-ticket"
                value="4"
                id="amount-ticket"
                style="width: 53%;"
              />
              vé
            </div>
            <div class="group-input">
              <label for="date-use">Ngày sử dụng</label><br />
              <input
                class="input input-full"
                type="text"
                value="15/06/2022"
                name="date-use"
                id="date-use"
              />
            </div>
          </div>
          <div class="group-input">
            <label for="contact">Thông tin liên hệ</label><br />
            <input
              class="input"
              type="text"
              name="contact"
              id="contact"
              value="Võ Đăng Khoa"
              style="width: 60%;"
            />
          </div>
          <div class="group-input">
            <label for="phone">Điện thoại</label><br />
            <input
              class="input"
              type="text"
              name="phone"
              value="0987782782"
              id="phone"
            />
          </div>
          <div class="group-input">
            <label for="email">Email</label><br />
            <input
              class="input"
              type="text"
              name="email"
              value="vdk@gmail.com"
              id="email"
              style="width: 60%;"
            />
          </div>
        </div>
      </div>
      <!-- form book ticket -->
      <img class="match" src="img/khungnoi.png" />
      <form action="" autocomplete="off" class="form">
        <img class="banner" src="img/thongtinthanhtoan.png" />
        <img class="bg-form" src="img/form.png" />
        <div id="pay-info">
          <!-- num-card -->
          <label for="num-card">Số thẻ</label><br />
          <input
            class="input input-full"
            type="number"
            name="num-card"
            placeholder="Số thẻ"
          /><br />
          <!-- ten chu the -->
          <label for="name">Họ tên chủ thẻ</label><br />
          <input
            class="input input-full"
            type="number"
            name="name"
            placeholder="Họ tên chủ thẻ"
          /><br />

          <!-- expiration & date -->
          <div class="expiration-date">
            <label for="date">Ngày hết hạn</label><br />
            <div class="group-date">
              <input
                name="date"
                id="book-date"
                class="input date"
                placeholder="Ngày hết hạn"
                type="text"
              />
              <button
                type="button"
                onclick="show_dp();"
                id="btn-date"
                class="btn-expiration-date"
              >
                <img src="img/calender.png" />
              </button>
            </div>
          </div>
          <!-- cvv/cvc -->
          <label for="cvv/cvc">CVV/CVC</label><br />
          <input
            type="number"
            name="cvv/cvc"
            placeholder="CVV/CVC"
            autocomplete="off"
            class="input input-sort"
          />
          <!-- button book ticket -->
          <a href="paymentSuccess.html" class="btn-pay">
            <img src="img/btn-pay.png" />
          </a>
        </div>
      </form>
      <!-- end form -->
    </div>
  </div>
@stop
@section('script')

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<link
  rel="stylesheet"
  href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"
/>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script type="text/javascript">
  jQuery(function ($) {
    $.datepicker.regional["vi-VN"] = {
      closeText: "Đóng",
      prevText: "Trước",
      nextText: "Sau",
      currentText: "    ",
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
  $(function () {
    $("#book-date").datepicker({
      changeMonth: true,
      changeYear: true,
      showButtonPanel: true,
      dateFormat: "mm/yy",
      minDate: "today",
      onClose: function (dateText, inst) {
        var month = $(
          "#ui-datepicker-div .ui-datepicker-month :selected"
        ).val();
        var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
        $(this).datepicker("setDate", new Date(year, month, 1));
      }
    });
  });

  function show_dp() {
    $("#book-date").datepicker("show");
  }
</script>
@stop
