@section('content')
<div class="container-fluid pl-0 pr-0">
    <div class="row row-justified ml-0 mr-0">
        <!-- Dashboard: Visitors -->
        <div class="col-xs-12 pl-0 pr-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Dashboard <small>Create New Manual Booking</small>
                        <span id='current-time' class='pull-right'></span>
                    </h3>
                </div>
            </div>
        </div>
    </div> <!-- / .row -->

    <div class="row row-justified ml-0 mr-0">
        <!-- Dashboard: Visitors -->
        <div class="col-xs-12 pl-0 pr-0">
            <div class="panel panel-default mt-m-8">
                <div class="panel-body">
                <a href="{{ URL::route('manual_bookings.manual_booking.index') }}" class="btn btn-info btn-sm pull-right">Booking List</a>
                    <h4>Create New Manual Booking:</h4>
                    <hr style='margin: 15px 0px;'>
                    <div class='col-xs-12 col-md-5'>
                        <form method="POST" action="{{ route('manual_bookings.manual_booking.create_booking') }}" accept-charset="UTF-8" id="create_manual_booking_form" name="create_manual_booking_form" class="form-horizontal">
                            {{ csrf_field() }}
                            <table class=''>
                            <tr>
                                <td>Select Location:</td>
                                <td>
                                    <select class='form-control' placeholder="Select Your Location" id='location_id' name='location_id' require>
                                    <option>Select One</option>
                                        @foreach($locations as $result)
                                            <option value='{{$result->name}}'>{{$result->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Select Tour:</td>
                                <td>
                                    <select class='form-control' placeholder="Select Your Tour" id='tour_id' name='tour_id' require>
                                    <option>Select One</option>
                                        @foreach($tours as $result)
                                            <option value='{{$result->tour_id_pick}}'>{{$result->title}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Select Tour Date:</td>
                                <td>
                                <div class="input-group">
                                    <input id="date_id" type="text" class="form-control datepicker" name="date_id" placeholder="YYYY-MM-dd">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=2>
                                <button type="submit" class="btn btn-info pull-right">Book Now</button>
                                </td>
                            </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div> <!-- / .container-fluid -->
@endsection