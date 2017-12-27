$bookings = DB::table('manual_bookings')->get();

        $current_month_and_date = date('F Y');
        
        $chart = Charts::database(ManualBooking::all(), 'bar', 'highcharts')
        ->title("Manual Booking Details: ".$current_month_and_date)
        ->elementLabel("Total Tour Solds")
        ->height(300)
        ->responsive(true)
        ->groupByDay();



<div class="row row-justified ml-0 mr-0">
<!-- Dashboard: Visitors -->
<div class="col-xs-12 pl-0 pr-0">
    <div class="panel panel-default mt-m-8">
        <div class="panel-body">
            <div>
                <a href='{{route("manual_bookings.manual_booking.create")}}' class='btn btn-info btn-sm pull-right'>Booking Now</a>
            </div>
            <div style='margin-bottom: 15px;'>
                {!! $chart->html() !!}
            </div>
            <table id='datatable' class='table table-striped table-bordered' style='margin-top: 5px;'>
                <col width="90">
                <col width="260">
                <col width="140">
                <col width="110">
                <col width="110">
                <col width="110">
                <tr>
                    <th><p class='text-center p-0'>Booking Code</p></th>
                    <th>Tour Name</th>
                    <th>Tour Date</th>
                    <th><p class='text-center p-0'>Total Amount</p></th>
                    <th><p class='text-center p-0'>Paid Amount</p></th>
                    <th><p class='text-center p-0'>Due Amount</p></th>
                </tr>
                @foreach($bookings as $result)
                <tr>
                    <td><p class='text-center p-0'>{{$result->booking_code}}</p></td>
                    <td>{{$result->tour_name}}</td>
                    <td>{{$result->tour_date}}</td>
                    <td><p class='text-center p-0'>{{$result->total_paid_amount}}</p></td>
                    <td><p class='text-center p-0'>{{$result->paid_amount}}</p></td>
                    <td><p class='text-center p-0'>{{$result->due_amount}}</p></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</div>

<script type="text/javascript" src="./resources/assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="./resources/assets/js/chartist.min.js"></script>
      <script type="text/javascript" src="./resources/assets/js/highcharts.js"></script>
      
      {!! $chart->script() !!}