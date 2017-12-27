@extends('layouts.app')

@section('content')
<section class="content-header">
    <h3>
        Dashboard <small>Manual Booking List</small>
        <span id='current-time' class='pull-right'></span>
    </h3>
</section>

<div class='full_container'>
    <a href="{{ URL::route('manual_bookings.manual_booking.create') }}" class="btn btn-info btn-sm pull-right" style="margin-bottom:  5px;">
    <i class="fa fa-plus" aria-hidden="true"></i> Add New Booking
    </a>
    <table id='index_table' class='table table-striped table-bordered' style='margin-top: 10px;'>
        <tr>
            <th class='text-center'>No.</th>
            <th>Booking Code</th>
            <th>Tour ID</th>
            <th>Tour Date</th>
            <th>Total Amount</th>
            <th>Paid Amount</th>
            <th>Due Amount</th>
            <th>Action</th>
        </tr>
        <?php $due_amount = 0.00;?>
        @foreach($manual_booking as $row=>$record)
        <tr>
            <td class='text-center'>{{$row + 1}}</td>
            <td>{{$record->booking_code}}</td>
            <td>{{$record->tours_id}}</td>
            <td>{{$record->tour_date}}</td>
            <td>THB {{$record->total_price}}</td>
            <td>THB {{$record->paid_amount}}</td>
            <td>THB {{$record->due_amount}}</td>
            <?php $due_amount = $due_amount + $record->due_amount;?>
            <td>
                <img onclick="details_show('{{$record->booking_code}}')"  class='action_icon' src="{{ asset('/resources/assets/icons/details_doc_icons.png')}}" alt=''>
                <img id='' class='action_icon' src="{{ asset('/resources/assets/icons/delete_icon.png')}}" alt=''>
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan=6 class='bg-success'>
                <p class='text-right' style='margin: 0px;'>Total Due Amount : </p>
            </td>
            <td class='bg-success'>
                THB <?php echo $due_amount;?>
            </td>
            <td class='bg-success'></td>
        </tr>
    </table>
</div>
@endsection
ManualBooking