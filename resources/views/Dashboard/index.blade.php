@extends('layouts.app')

@section('content')
<section class="content-header">
    <h3>
        Dashboard
        <span id='current-time' class='pull-right'></span>
    </h3>
</section>
<div class='flex_container' style='margin-top: 15px;'>
    <div class="info-box">
        <span class="info-box-icon bg-aqua">
        <img src="{{ asset('/resources/assets/img/location.png')}}" class="dash_img_icon" alt="">
        </span>
        <div class="info-box-content">
            <span class="info-box-text">Locaton</span>
            <span class="info-box-number"><?php echo count($locations);?></span></span>
        </div>
    </div>
    <div class="info-box">
        <span class="info-box-icon bg-aqua">
        <img src="{{ asset('/resources/assets/img/tour.png')}}" class="dash_img_icon" alt="">
        </span>
        <div class="info-box-content">
            <span class="info-box-text">Tour</span>
            <span class="info-box-number"><?php echo count($tours);?></span></span>
        </div>
    </div>
    <div class="info-box">
        <span class="info-box-icon bg-aqua">
        <img src="{{ asset('/resources/assets/img/booking.png')}}" class="dash_img_icon" alt="">
        </span>
        <div class="info-box-content">
            <span class="info-box-text">Manual Booking</span></span>
            <span class="info-box-number"><?php echo count($manual_bookings);?></span></span>
        </div>
    </div>
    <div class="info-box">
        <span class="info-box-icon bg-aqua">
        <img src="{{ asset('/resources/assets/img/client.png')}}" class="dash_img_icon" alt="">
        </span>
        <div class="info-box-content">
            <span class="info-box-text">Client</span>
            <span class="info-box-number"><?php echo count($clients);?></span></span>
        </div>
    </div>
</div>
<div class='' style='margin-top: 10px;'>
{!! $chart->html() !!}
</div>
{!! Charts::scripts() !!}
{!! $chart->script() !!}
@endsection